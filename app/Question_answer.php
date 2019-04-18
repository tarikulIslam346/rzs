<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Question_answer extends Model
{
    protected $fillable =[
        'user_id','phone','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10'
    ];

    public function store_answers(){
        Question_answer::create([
            'user_id'  => Auth::user()->id , 
            'phone' => Auth::user()->phone,
            'q1' => request('q1'),
            'q2' => request('q2'),
            'q3' => request('q3'),
            'q4' => request('q4'),
            'q5' => request('q5'),
            'q6' => request('q6'),
            'q7' => request('q7'),
            'q8' => request('q8'),
            'q9' => request('q9'),
            'q10' => request('q10')
        ]);
    }
}
