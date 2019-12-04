<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class DashboardController extends Controller
{
   public function index()
   {
    	return view('admin.dashboard');	
   }

   public function login()
   {
   	return view('admin.login.login');
   }

   public function loginCheck(Request $request)
   {
   		$credential = [
   			'email' 	=> $request->email,
   			'password'  => $request->password
   		];

   		if (Auth::guard('admin')->attempt($credential)) {
            Session::put('admin', Auth::guard('admin')->user());
            return redirect(route('dashboard'));
        } else {
            return back()->withErrors(['message','You Are not Admin!']);
        } 

   }
}
