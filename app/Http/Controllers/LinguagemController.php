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

    public function store(Request $request){
        $linguagem = new Linguagen();
        $linguagem->nome = $request->nome;
        $linguagem->compilador_interpretador = $request->compilador_interpretador;
        $linguagem->descricao = $request->descricao;
        $linguagem->save();
        return redirect('/linguagem/lista/')->with('msg', 'Linguagem adicionada com sucesso');
    }
}
