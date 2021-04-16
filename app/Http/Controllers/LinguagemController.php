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
        $linguagem->nome = filter_var ($request->nome,FILTER_SANITIZE_SPECIAL_CHARS);
        $linguagem->compilador_interpretador = filter_var($request->compilador_interpretador,FILTER_SANITIZE_SPECIAL_CHARS);
        $linguagem->descricao = filter_var($request->descricao,FILTER_SANITIZE_SPECIAL_CHARS);
        $linguagem->save();
        return redirect()->route('allLinguagem')->with('msg', 'Linguagem adicionada com sucesso');
    }
}
