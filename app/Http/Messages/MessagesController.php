<?php

namespace App\Http\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function store() {
        return request('email');
    }
}
