<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserRegisterController extends Controller
{
    //
    public function getRegister()
    {
        Auth::logout();
        return redirect('/register');
    }
}
