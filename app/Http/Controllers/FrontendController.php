<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontendController extends Controller
{
    public function __construct(){

    }

    public function welcome(){

    	$cats = DB::table('categories')->where('status','on')->get();
    	$socials = DB::table('socials')->where('status','on')->get();

    	return view('home', [
    		'cats' => $cats,
    		'socials' => $socials,
    	]);
    }
}
