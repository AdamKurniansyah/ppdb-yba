<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice()
    {
        return view('verifyEmail');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/')->with('success', 'Akun berhasil dibuat, Selamat datang di situs ppdb yayasan busyri al aly');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return view('verifyEmail');
    }
}
