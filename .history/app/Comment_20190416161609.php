<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[
        'post_id','user_id','comment'
    ];

    public function post(){
        return $this->hasMany('App\Post', 'post_id', 'id');
    }
}
