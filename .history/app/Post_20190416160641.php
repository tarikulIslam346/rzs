<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable =[
        'title','post','post_image'
    ];

    
    public function comments(){
        return $this->hasMany('App\Comment', 'post_id', 'id');
    }
}
