<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function sendContactForm(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('john@example.com')->send(new ContactForm($validatedData));

        return redirect()->back()->with('success', 'Your message has been sent');
    }
}
