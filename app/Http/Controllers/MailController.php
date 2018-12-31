<?php

namespace App\Http\Controllers;

use App\Mail\SendContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function sendContactform(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|alpha',
            'email' => 'required|email',
            'message' => 'required|string|alpha',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }

        Mail::to(env('MAIL_TO'))->send(new SendContactMessage($request->name, $request->email, $request->message));

        return response()->json(['success' => 'Your message has been sent successfully! I\'ll get back to you as quick as possible.']);
    }
}
