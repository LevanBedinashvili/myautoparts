<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $text = $request->text;
        Mail::to('levanibedinashvili20@gmail.com')->send(new Contact($name, $email, $text));
        return redirect()->back()->with('success', 'მეილი წარმატებით გაიგზავნა');
    }
}
