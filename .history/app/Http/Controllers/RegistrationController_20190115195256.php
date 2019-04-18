<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'profile_pic' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $profile_pic ='';
        $image_name ='';
        if(request()->hasfile('profile_pic'))
         {
                $image_name =time()."-".request()->file('profile_pic')->getClientOriginalName();
               request()->file('profile_pic')->move(public_path().'/images/user_profile', $image_name);  
                $profile_pic = $image_name;  
            
         }
        User::create([
            'name'  => request('name') , 
            'email' => request('email'),
            'batch' => request('batch'),
            'phone' => request('phone'),
            'status' => request('status'),
            'profile_pic' => $profile_pic,
            'password' => bcrypt(request('password'))
        ]);
        return redirect('/')->with('registration','successfull');
    }      
}
