<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function registro(){
        return view('auth.register');
    }
}
