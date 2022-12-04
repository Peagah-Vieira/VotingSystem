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
            return redirect()->to('/');
        }

        if (!Hash::check($password, $user->password)) {
            return redirect()->to('/');
        }

        //Quando login for efetuado com sucesso aparecer messagem ToastR e depois de 3 segundos redirecionar (A ser feito)
        return redirect()->to('home');
    }
}
