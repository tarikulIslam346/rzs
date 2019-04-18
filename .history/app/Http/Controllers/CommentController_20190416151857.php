<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public  function store(Request $request){
        //$comment = new Comment;
        echo $request->all();
        //$comment->post()
        //Comment::create($request->all());
        return redirect('/user')->with('post_create','successfully');
    }
}
