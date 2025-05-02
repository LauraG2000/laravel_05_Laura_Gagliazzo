<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicController extends Controller
{
    public function homepage() 
    {
        return view('welcome');
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function thankYou()
    {
        return view('thankYou');
    }

    public function submit(Request $request)
    {
        $name = $request->input('username');
        $email = $request->input('useremail');
        $message = $request->input('usermessage');

        // Invia l'email usando la classe ContactMail
        Mail::to($email)->send(new ContactMail($name, $email, $message));
        
        // Redirect alla homepage
        // return redirect()->route('home')->with('invioMail', 'Mail inviata con successo!');

        // Redirect sulla thankyou-page
        return redirect()->route('thankYou.page');

    }


}
