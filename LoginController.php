<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request){
        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)){
            return redirect()->intended(route('user.private')) ;    
        }

        return redirect(route('user.login'))->withErrors([
            'email' => 'Не удалось авторизоваться'
        ]); 
    }
}
