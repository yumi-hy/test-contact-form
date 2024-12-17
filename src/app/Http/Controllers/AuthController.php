<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {

    }
}
