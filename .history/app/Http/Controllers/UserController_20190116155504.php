<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    //
    public function update($user_id){
     User::where('id',$user_id)
     	->update([
      	'name' => request('name'),
      	'password' =>bcrypt(request('password')),
      	'email' => request('email')
      ]);
      return redirect('/user')->with('user_update','successfully');
    }
    public function getBatchdata($batch){
     $user = User::where('batch',$batch)->get();
     /* view('user.index',compact('user')); */
     return view('user.index',compact('user') );
    }


}
