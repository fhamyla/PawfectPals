<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Send email using Laravel Mail
        Mail::to(env('GMAIL_USER'))->send(new ContactFormMail($request->all()));

        return response()->json([
            'message' => 'Thank you for your message! We will get back to you soon.'
        ]);
    }
} 