<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function show() {
        echo 'show user No1';
    }
}
