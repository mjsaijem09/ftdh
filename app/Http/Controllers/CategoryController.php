<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('categories')->get();
        return view('adminpanel.category.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Input::except('_token', 'submit');
        $tbl = decrypt($data['tbl']);
        unset ($data['tbl']);

        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);

        if (Input::has('title')) {
            $data['slug'] = $this->slug($data['title']);
        }

        Category::create($request->all());

        session::flash('message','New category added!!!');
        return redirect()->back();
    }

    private function slug($string){
        $string = strtolower(trim($string));
        $string = preg_replace('/\s+/', '-', $string);
        $string = preg_replace('/[^a-z0-9-]/', '-', $string);
        $string = preg_replace('/-+/', '-', $string);
        return rtrim($string, '-');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data = DB::table('categories')->get();
        $category = DB::table('categories')->where('id', $id)->first();
        if($category){
            return view('adminpanel.category.edit', ['data'=>$data, 'category'=>$category]);
        }else{
            return redirect('categories');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);

        $category->update($request->all());

        session::flash('message','Category updated successfully!!!');
        return redirect()->route('categories.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        session::flash('message','Category deleted successfully!!!');
        return redirect()->route('categories.index');
    }
}
