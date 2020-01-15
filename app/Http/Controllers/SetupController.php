<?php

namespace App\Http\Controllers;

use App\Setup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = DB::table('setups')->first();
        
        if (!empty($data)) {        
            $socials = explode(',',$data -> social);
        }else{
            $socials = [];
        }
        return view ('adminpanel.setup.index',['data' => $data,'socials' => $socials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function show(Setup $setup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('setups')->first();
        $setup = DB::table('setups')->where('id', $id)->first();
        
        if (!empty($data)) {        
            $socials = explode(',',$data -> social);
        }else{
            $socials = [];
        }

        if($setup){
        return view ('adminpanel.setup.edit',['data' => $data,'socials' => $socials]);
        }else{
            return redirect('setups');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, Setup $setup)
{
    $data = Input::except('_token', 'submit', '_method');
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

    $data['updated_at'] = date('Y-m-d H:i:s');
    DB::table($tbl)->where(key($data), reset($data))->update($data);

    session::flash('message','Setup updated successfully!!!');
    return redirect()->route('setups.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setup $setup)
    {
        //
    }
}
