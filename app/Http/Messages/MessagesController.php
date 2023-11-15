<?php

namespace App\Http\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function store() {
        request()->validate([
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'content' => 'required |min:5'
        ]);

        return 'Datos Validados';
    }
}
