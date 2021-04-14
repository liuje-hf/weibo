<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        $this->authorize('follow', );
    }
}
