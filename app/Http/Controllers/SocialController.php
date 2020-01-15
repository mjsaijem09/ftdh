<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('socials')->get();
        return view('adminpanel.social.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required',
            'status' => 'required',
        ]);
  
        Social::create($request->all());
        
        session::flash('message','New social link added!!!');
        return redirect()->route('socials.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('socials')->get();
        $social = DB::table('socials')->where('id', $id)->first();
        if($social){
            return view('adminpanel.social.edit', ['data'=>$data, 'social'=>$social]);
        }else{
            return redirect('socials');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required',
            'status' => 'required',
        ]);

        $social->update($request->all());

        session::flash('message','social link successfuly updated!!!');
        return redirect()->route('socials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        $social->delete();

        session::flash('message','social deleted successfuly!!!');
        return redirect()->route('socials.index');
    }
}
