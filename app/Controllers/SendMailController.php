<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    

  public function mailSend(Request $request){


    $mail = request()->validate([
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required',
      ]);

      Mail::to('john12ayuk@gmil.com')->send(new ContactMail($mail));


      return redirect('/')->with('success', 'Thank you for contacting us');

        
  }



}
