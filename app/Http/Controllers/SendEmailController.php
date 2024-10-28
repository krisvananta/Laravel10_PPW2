<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\SendMailJob;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {
        $content = [
            'name' => 'John Doe',
            'subject' => 'Ini subject email',
            'body' => 'Hello, this is a test email.',
        ];

        Mail::to('muhammadkrisvanantamuflihafif@mail.ugm.ac.id')->send(new SendEmail($content));

        return "Email berhasil dikirim.";
    }

    public function store(Request $request)
    {
        $data = $request->all();

        dispatch(new SendMailJob($data));
        return redirect()->route('send-email')
        ->with('success', 'Email successfully sent');
    }
}
