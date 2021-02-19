<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function processData(Request $request){
        $this->validate($request, [
                'name' => 'required',
                //'lname' => 'required',
                'email' => ['required','email'],
                'phone' => ['required','numeric','digits_between:9,12'],
                'message' => 'required'
        ]);

        Mail::send('emails.contact-tmpl', [
                'name' => $request->get('name'),//." ".$request->get('lname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'project' => $request->get('project'),
                'service' => $request->get('service'),
                //'estimate' => $request->get('estimate'),
                //'priority' => $request->get('priority'),
                //'country' => $request->get('country'),
                'comment' => $request->get('message')
            ],
            function ($message) {
            $message->from('contact-us@medha.digital');
            $message->to('medhadigitalsolutions@gmail.com', 'Admin')
                    ->subject('New Contact Request - Medha Digital');
        });

        return redirect('/contact#messages')->with('success', 'Thanks for contacting us, We will get back to you soon!');
    }

    
}
