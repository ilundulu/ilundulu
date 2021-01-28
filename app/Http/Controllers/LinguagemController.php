<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Linguagen;

class LinguagemController extends Controller
{
    public function create(){
        return view('linguagem.create');
    }

    //busca todos dados da linguagem 
    public function tDados(){
        $linguagens = Linguagen::all();
        return view('linguagem.todas',['linguagens' => $linguagens]);
    }
}
