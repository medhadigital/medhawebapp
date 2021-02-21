<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function sendMail(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required','email'],
            'message' => 'required'
            ]);
        
        $details = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'service' => $request->get('service'),
            'comment' => $request->get('message')
        ];

        $to = config('app.admin_email');

        \Mail::to($to)->send(new \App\Mail\Contact($details));

    return redirect('/contact#messages')->with('success', 'Thanks for contacting us, We will get back to you soon!');
    }
}
