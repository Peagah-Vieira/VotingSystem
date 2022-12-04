<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function forgotPassword()
    {
        return view('forgotPassword');
    }

    public function home()
    {
        return view('home');
    }
}
