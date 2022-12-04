<?php

namespace App\Http\Auth;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Http\Requests\loginSubmitRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuth extends Controller
{
    private $logger;

    public function __construct()
    {
        $this->logger = new Logger();
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

        //Quando redirecionar utilizar biblioteca toastR para emitir um avisso (A ser Feito)
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
            $this->logger->log('error', $email . ' - ' . 'User not found.');

            return redirect('/')->with('status', 'User not found!');
        }

        if (!Hash::check($password, $user->password)) {
            $this->logger->log('error', $email . ' - ' . 'Incorrect password.');

            return redirect('/')->with('status', 'Incorrect password!');
        }

        //Quando login for efetuado com sucesso aparecer messagem ToastR e depois de 3 segundos redirecionar (A ser feito)
        session()->put('user', $user);
        $this->logger->log('info', 'Login Efetuado com sucesso');


        return redirect()->to('home');
    }
}
