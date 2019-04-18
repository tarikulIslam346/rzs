<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{      
    public function store(){
      	if (auth()->attempt(request(['phone','password'])) && request('status') == 0){
          //$id = auth()->id();
        	return redirect('/'); 
      	}
      	if (auth()->attempt(request(['phone','password'])) && request('status') == 1){
        	return redirect('/admin'); 
      	}
      	return back();
      	  
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/admin_login');
    }
    public function destroy_user()
    {
        auth()->logout();
        return redirect('/');
    }
}
