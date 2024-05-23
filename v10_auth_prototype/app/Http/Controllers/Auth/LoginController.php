<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()){
            return redirect(route('manager'));
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if(Auth::check()){
            redirect(route('manager'));
        }

        $data = $request->only('email', 'password');

        if(Auth::attempt($data, $remember = true)){
            $request->session()->regenerate();
            redirect(route('manager'));
        }

        return redirect(route('user.login'));
    }

}
