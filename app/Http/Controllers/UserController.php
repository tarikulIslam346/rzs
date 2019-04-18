<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Question_answer;

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
     $batch = User::select('batch')->distinct('batch')->get();
     /* view('user.index',compact('user')); */
     return view('user.index',compact('user','batch') );
    }

    public function questionAnswers(){
      $answers = new Question_answer();
      $answers->store_answers();
      return redirect('/')->with('question_answers','Answer submitted successfully');
    }


}
