<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{


	public function store(Request $request){

      $request->validate([
         'name' => 'required',
         'email' => 'required|email',
         'subject' => 'required',
         'message' => 'required'
      ]);

   
   try{
     
      $contact = new Contact;

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->phone = $request->phone;
      $contact->message = $request->message;

      $contact->save();


   	 return response()->json(['status'=>'success','message'=>'Your Contact Done!']);


     }

   catch(\Exception $e){
           
              return response()->json(['status'=>'error','message'=>'Something Went Wrong !']);
          }
     
	}


    
}
