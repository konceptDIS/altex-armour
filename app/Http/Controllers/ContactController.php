<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Send email
        Mail::send([], [], function ($message) use ($request) {
            $message->to('info@altexsecurity.com') 
                ->subject('New Contact Form Submission')
                ->setBody("
                    Name: {$request->firstname} {$request->lastname} <br>
                    Email: {$request->email} <br>
                    Phone: {$request->phone} <br>
                    Message: {$request->message}
                ", 'text/html');
        });

        return back()->with('success', 'Your message has been sent successfully.');
    }
}
