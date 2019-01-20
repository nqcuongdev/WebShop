<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use Session;

class SendContactMailController extends Controller
{
    public function sendContactMail(Request $request){
    	 // $this->validate($request,[
      //       'fullname'=>'required',
      //       'email'=>'required|email',
      //       'subject'=>'required',
      //       'message'=>'required'
      //   ]);

        $fullname = $request->c_fname;
        $mail = $request->c_email;
        $subject = $request->c_subject;
        $message = $request->c_message;

        Mail::to($mail)->send(new ContactMail($subject, $message));
        Session::flash('success');
        return back();
    }
}
