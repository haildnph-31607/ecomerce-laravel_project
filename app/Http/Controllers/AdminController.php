<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function loginAdmin(){
          return view('auth.login-admin');
    }
    public function logout(){
        Auth::logout();
        $notification = [
            'message'=>"Logout successfuly",
            'type'=>'sucess'
        ];
        return redirect()->route('login-admin')->with($notification);
    }

}
