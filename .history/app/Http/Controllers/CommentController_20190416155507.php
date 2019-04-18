<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public  function store(Request $request,$userId,$postId){
       Comment::create([
        'post_id' => $postId,
        'user_id' => $userId,
        'comment' => request('comment'),
       ]);
       return redirect('/user')->with('comment_create','successfully');
    }
}
