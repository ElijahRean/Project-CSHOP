<?php

namespace App\Http\Controllers;

use App\Models\ContactForm as ContactFormModel;
use App\Mail\ContactForm as ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function sendContactForm(Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactFormModel::create($data);

        // Mail::to('john@example.com')->send(new ContactForm($data));

        return redirect()->back()->with('success', 'Your sweet request has been sent! :)');
    }
}
