<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function register(UserRequest $req) {

        $register = new User();

        $register
            ->login = $req->input('login');
        $register
            ->password = $req->input('password');

        $register->save();


        return redirect()->route('login')
            ->with('success', 'Вы успешно зарегестрировались! Пожалуйста войдите!');

    }

    public function login(UserRequest $req) {

        $login = User::where('login', $req->get('login'))->first();

        if (!$login) {
            return redirect()->route('login')
                ->with('danger', 'Вы ввели неверный логин!');
        }

        if ($login->password === $req->get('password') and $login->login === $req->get('login')) {

            return redirect()->route('personal')
                ->with('success', 'Вы успешно авторизовались!');

        } else {

            return redirect()->route('login')
                ->with('danger', 'Вы ввели неверный пароль!');

        }


    }

}
