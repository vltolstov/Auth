<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect(route('manager'));
        }
        return view('auth.registration');
    }

    public function save(Request $request)
    {
        if(Auth::check()){
            return redirect(route('manager'));
        }

        $validationData = $request->validate([
            'name' => 'required|string|max:64',
            'email' => 'required|string|email|unique:users',
            'phone' => 'required|string',
            'password' => 'required|string|min:6|max:16'
        ]);

        if(User::where('email', $validationData['email'])->exists()){
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Пользователь с таким Email уже существует'
            ]);
        }

        $validationData['role_id'] = Role::select('id')->where('name', 'user')->value('id');

        $user = User::create($validationData);
        if($user){
            Auth::login($user);
            return redirect(route('manager'));
        }

        return redirect(route('user.registration'))->withErrors([
            'formError' => 'Ошибка регистрации пользователя'
        ]);

    }

}
