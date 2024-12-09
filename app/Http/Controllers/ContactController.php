<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{

    public function show()
    {
        return view('pages.institutional.contact');
    }

    public function sendEmail(Request $request)
    {
        // Pega os dados do input do usuário, e salva na array em cada posição.
        $data = array();
            $data['name'] = $request->input('name');
            $data['email'] = $request->input('email');
            $data['subject'] = $request->input('subject');
            $data['message'] = $request->input('message');
            $data['newsletter-optin'] = $request->input('newsletter-optin');

        Mail::to('religarebio@gmail.com')->send(new ContactFormEmail($data));
        return back()->with('success', 'Obrigado. Responderemos o mais rápido possível.');
    }

}
