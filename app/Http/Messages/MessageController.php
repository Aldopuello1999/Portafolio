<?php

namespace App\Http\Messages;

use App\Http\Controllers\Controller;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    function store() {
        $Message = request()->validate([
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'content' => 'required |min:5'
        ]);

        Mail::to('aldopuello05@gmail.com')->send(new MessageReceived($Message));
        return 'Mensaje Enviado';
    }
}
