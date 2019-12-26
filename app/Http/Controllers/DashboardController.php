<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
            Session::put('admin', Auth::guard('admin')->user()->email);
            return redirect(route('dashboard'));
        } else {
            return back()->with(['alert-type' => 'error','message'=>'You Are not Admin!']);
        } 

   }
  public function logout()
    {
        if (Session::has('admin')) {
            // Session::forget(Auth::guard('admin')->user()->email);
            auth('admin')->logout();
            // Session::destroy();
            Session::flush();
            return redirect(route('login'));
        }
    }

  public function changePassword()
  {
    return view('admin.login.changePassword');
  }

  public function updatePassword(Request $request)
  {
    $user = User::where('email',Session::get('admin'))->first();
    $validation = Validator::make($request->all(),[
          'old_pass' => 'required',
          'password' => 'confirmed|different:old_pass',
        ]);

    if (!$validation->fails()) {
      if (Hash::check($request->old_pass, $user->password)) { 
         $user->fill([
            'password' => Hash::make($request->new_pass)
          ])->save();

          return back()->with(['alert-type' => 'success','message' => 'Password changed']);

      } else {
          return back()->with(['alert-type' => 'error','message' => 'Password not changed']);
      }
    }
    else {
       return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
    }
  }
}
