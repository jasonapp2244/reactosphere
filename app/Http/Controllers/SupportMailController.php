<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportEmail;

class SupportMailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'comments' => 'required|string',
        ]);

        $details = [
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'phone'      => $request->phone,
            'email'      => $request->email,
            'comments'   => $request->comments,
        ];

        $SUPPORT_EMAIL = env('SUPPORT_EMAIL', '');

        // Send email to admin/support
        Mail::to($SUPPORT_EMAIL)->send(new SupportEmail($details));

       return redirect()->route('support.thanksPage')->with('success', 'Your support message has been sent successfully!');
    }

    public function thanksPage()
    {
        return view('user.thanksPage');
    }
}
