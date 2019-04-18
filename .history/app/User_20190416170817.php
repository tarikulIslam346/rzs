<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email','batch','phone' ,'status','password','profile_pic',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment(){
        return $this->belongsTo('App\Comment','id','user_id');
    }
}
