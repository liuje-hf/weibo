<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    pbulic function create() {
        return view('session.create');
    }
}
