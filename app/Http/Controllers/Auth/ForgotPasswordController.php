<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Providers\RouteServiceProvider;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
}
