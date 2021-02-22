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

        $redirect = '/contact#messages';

        if ($request->is('gettouch')) {
            $redirect = '/#gettouch';
        }
        
        $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required','email'],
            'phone' => ['nullable','numeric','digits_between:9,12'],
            'subject' => ['nullable', 'string'],
            'message' => ['required', 'string']
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

    return redirect($redirect)->with('success', 'Thanks for contacting us, We will get back to you soon!');
    }
}
