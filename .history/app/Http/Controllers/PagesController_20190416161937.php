<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Post;
use App\Comment;

class PagesController extends Controller
{
    //
    public function home(){
    	return view('home.index');
    }
    public function user_info(){
    	if(\Auth::check())
    	{
            $batch = User::select('batch')->distinct('batch')->get();
            $post = Post::all();
            $comments = Comment::select('posts.id','comments.comment','comments.user_id')->join('posts','posts.id','=','comments.post_id')->get();
           // dd($comments);

    		return view('user.index',compact('batch','post','comments'));
    	}else {
    		return view('home.index');
    	}
    } 

    public function details(){
        return view('user.single-page');
    }
}
