<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        return view ('adminpanel.dashboard');
    }

    public function Category()
    {
        $data = DB::table('headers')->get();
        return view ('adminpanel.insert.category', ['data'=>$data]);
    }

    public function homeSetting()
    {
        return view ('adminpanel.insert.homeSetting');
    }

     public function Setup()
    {
        $data = DB::table('setups')->first();
        if (!empty($data)) {        
            $socials = explode(',',$data -> social);
        }else{
            $socials = [];
        }
        return view ('adminpanel.insert.setup',['data' => $data,'socials' => $socials]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertData(Request $request)
    {
        $data = Input::except('_token', 'submit');
        $tbl = decrypt($data['tbl']);
        unset ($data['tbl']);

        if (Input::has('social')) {
            $data['social'] = implode(',',$data['social']);
        }

        if(!empty($data['image'])){
            if(Input::hasFile('image')){
              $data['image'] = $this->upload($data['image'], $tbl);
            }
        }

        if (Input::has('title')) {
            $data['slug'] = $this->slug($data['title']);
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->insert($data);
        session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }

    private function slug($string){
        $string = strtolower(trim($string));
        $string = preg_replace('/\s+/', '-', $string);
        $string = preg_replace('/[^a-z0-9-]/', '-', $string);
        $string = preg_replace('/-+/', '-', $string);
        return rtrim($string, '-');

    }

    private function upload($image, $tbl){
        $name = $image->getClientOriginalName();
        $newName = date('ymdgis').$name;
        $image->move(public_path().'/'.$tbl,$newName);
        return $newName;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function editCategory($id){
        $data = DB::table('headers')->get();
        $maindata = DB::table('headers')->where('id', $id)->first();
        if($maindata){
            return view('adminpanel.edit.editCategory', ['data'=>$data, 'maindata'=>$maindata]);
        }else{
            return redirect('headers');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updateCategory(){
        $data = Input::except('_token', 'submit');
        $tbl = decrypt($data['tbl']);
        unset ($data['tbl']);

        if(!empty($data['image'])){
          if(Input::hasFile('image')){
            $data['image'] = $this->upload($data['image'], $tbl);
          }
        }

        if (Input::has('title')) {
            $data['slug'] = $this->slug($data['title']);
        }

        $data['updated_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->where(key($data), reset($data))->update($data);

        session::flash('message','Data updated successfully!!!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteCategory($id){
        $data = DB::table('headers')->where('id', $id)->delete();
        session::flash('message','Data deleted successfully!!!');
        return redirect()->back();
    }
}
