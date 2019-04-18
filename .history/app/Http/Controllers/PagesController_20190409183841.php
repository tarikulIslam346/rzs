<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class PagesController extends Controller
{
    //
    public function home(){
    	return view('home.index');
    }
    public function batch_info(){
    	if(\Auth::check())
    	{
    		$batch = User::select('batch')->distinct('batch')->get();;
    		return view('user.index',compact('batch'));
    	}else {
    		return view('home.index');
    	}
    } 

    public function details(){
        return view('user.single-page');
    }
}
