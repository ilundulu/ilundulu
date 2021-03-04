<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
