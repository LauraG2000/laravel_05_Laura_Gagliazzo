<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\View;

class PublicController extends Controller
{
    public function homepage() 
    {
        return view('welcome');
    }

    public function coffee() 
    {
        return view('coffee');
    }

    public function milkShake() 
    {
        return view('milkshake');
    }

    public function muffin()
    {
        return view('muffin');
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function thankYou()
    {
        return view('thankYou');
    }

    public function __construct()
    {
        View::share('text1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laudantium, delectus et facere laboriosam ea earum porro molestiae exercitationem tempora. Repellat quaerat veniam non ducimus eum provident atque, possimus distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis corrupti veniam exercitationem quo at optio est illum fuga soluta a. Odit quo ex perspiciatis nihil ab deserunt odio similique sapiente! 
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, nobis voluptatum similique facilis illo ducimus? Fuga dicta recusandae voluptatum ad libero id asperiores nisi, veritatis quo eos illo nulla sit?');
        View::share('text2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laudantium, delectus et facere laboriosam ea earum porro molestiae exercitationem tempora. Repellat quaerat veniam non ducimus eum provident atque, possimus distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis corrupti veniam exercitationem quo at optio est illum fuga soluta a. Odit quo ex perspiciatis nihil ab deserunt odio similique sapiente 
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, nobis voluptatum similique facilis illo ducimus? Fuga dicta recusandae voluptatum ad libero id asperiores nisi, veritatis quo eos illo nulla sit?');
        View::share('text2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laudantium, delectus et facere laboriosam ea earum porro molestiae exercitationem tempora. Repellat quaerat veniam non ducimus eum provident atque, possimus distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis corrupti veniam exercitationem quo at optio est illum fuga soluta a. Odit quo ex perspiciatis nihil ab deserunt odio similique sapiente 
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, nobis voluptatum similique facilis illo ducimus? Fuga dicta recusandae voluptatum ad libero id asperiores nisi, veritatis quo eos illo nulla sit?');
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
