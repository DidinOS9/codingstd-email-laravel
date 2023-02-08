<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dataEmail()
    {
        return view('data-email');
    }

    public function send(Request $request)
    {
        Mail::to($request->email)->send(new HelloMail($request->body));
        return back();
    }
}
