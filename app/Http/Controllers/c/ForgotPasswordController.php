<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ForgotPasswordController extends Controller
{
    use ResetPasswords;

    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if(Auth()->user()->role == 1){
            return route('dashboard');
        }
        elseif(Auth()->user()->role == 2){
            return route('dashboard');
        }
    }
}
