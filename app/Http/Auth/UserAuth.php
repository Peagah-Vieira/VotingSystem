<?php

namespace App\Http\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginSubmitRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuth extends Controller
{
    /**
     * @return view
     */
    function index()
    {
        return view('login');
    }

    /**
     * @return view
     */
    function registerPage()
    {
        return view('register');
    }

    /**
     * @return view
     */
    function forgotPassword()
    {
        return view('forgotPassword');
    }

    /**
     * Function that registers the user in the database
     *
     * @param UserRegisterRequest $request
     * @return void
     */
    public function register(UserRegisterRequest $request)
    {
        $request->validated();

        $fName = $request->string('firstName')->trim();
        $lName = $request->string('lastName')->trim();
        $email = $request->string('email')->trim();
        $password = $request->string('password')->trim();

        User::create([
            'name' => $fName,
            'lastname' => $lName,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return redirect()->to('login');
    }

    /**
     * Function that checks if the credentials entered are correct and logs in
     *
     * @param loginSubmitRequest $request
     * @return redirect
     */
    public function login(loginSubmitRequest $request)
    {
        $request->validated();

        $email = $request->string('email')->trim();
        $password = $request->string('password')->trim();

        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->to('login');
        }

        if (!Hash::check($password, $user->password)) {
            return redirect()->to('login');
        }

        session()->put('user', $user);
        
        return redirect()->to('home');
    }
}