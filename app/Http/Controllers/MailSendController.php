<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class MailSendController extends Controller
{
    
    function send(Request $request)
    {
        $this->validate($request, [
            'name'      =>      'required',
            'email'     =>      'required|email',
            'phone'     =>      'required|max:12',
            'message'     =>      'required',
        ]);

        $data = array(
            'name'          => $request->name,
            'phone'         =>  $request->phone,
            'email'         =>  $request->email,
            'submessage'         =>  $request->message,
            
        );

        // Mail::to('udedborfavor@gmail.com')->send(new SendMail($data));
        // return back()->with('success', 'thanks for contacting us!');

        Mail::send( 'dynamic_email_template', $data,  function($message) use ($data){
            $message->from($data['email']);
            $message->to('udedborfavor@gmail.com');
            $message->subject($data['submessage']);
           

         });
         return back()->with('success', 'thanks for contacting us!');


    }
}
