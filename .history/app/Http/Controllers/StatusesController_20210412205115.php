<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function __struct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        # code...
    }
}
