<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
        return view('session.create');
    }

    public function store(Request $request) {
        $cred
    }
}
