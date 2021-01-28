<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectoController extends Controller
{

    public function create(){

        return view('projecto.create');
    }
}
