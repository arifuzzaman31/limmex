<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Contact;
use Illuminate\Support\Facades\Validator;

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

         $to = "limmexbd@gmail.com";

         $name = $request->name;
         $email = $request->email;
         $subject = $request->subject;

        Mail::send('contact.us',[ 'name'=>$request->name, 'phone'=>$request->phone, 'email'=>$request->email, 'subject' => $request->subject, 'user_message' => $request->message  ], 
                function ($message) use ($to,$email,$name,$subject){
                    $message->from($email,$name);
                    $message->to($to)->subject($subject);
           });
   	 return response()->json(['status'=>'success','message'=>'Your Contact Done!']);

     }

   catch(\Exception $e){
           		return $e;
            return response()->json(['status'=>'error','message'=>'Something Went Wrong !']);
          }
     
	}
    
}
