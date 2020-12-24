<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteMail;
use Illuminate\Http\Request;


class MailController extends Controller
{
    //

    function sendQuoteMail(){    
        $details = [
            'First Name'=>request('firstName'),
            'Last Name' =>request('lastName'),
            'Phone No' => request('email'),
            'Email' => request('phone'),
            'Message' => request('message')
        ];
        Mail::to("hasnainshoaib45@gmail.com")->send(new QuoteMail($details));
        return redirect('/');
    }

    function sendContactMail(){
        $details = [
            'Name' => request('name'),
            'Email' => request('email'),
            'Subject' => request('subject'),
            'Message' => request('message')
        ];
        Mail::to("hasnainshoaib45@gmail.com")->send(new ContactMail($details));
        return redirect('/');
    }
}
