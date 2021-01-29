<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Projecto;
use App\Models\Linguagen;
class ProjectoController extends Controller
{

    public function create(){
        $linguagens=Linguagen::all();
        return view('projecto.create',['linguagens'=>$linguagens]);
    }

    public function store(Request $request){
        $projecto = new Projecto();
        $projecto->nome = $request->nome;
        $projecto->integrantes = $request->integrantes;
        $projecto->deadline = $request->data." ".$request->hora;
        $projecto->id_linguagem=$request->linguagem;

        //id do manager que publicou
        $user = Auth::user();
        $projecto->id_user=$user->id;

        //enunciado upload
        $imagem = $request->enunciado;
        $extencao = $imagem->extension();
        $enunuciadoNome= md5($projecto->nome."-".strtotime("now")).'.'.$extencao;
        $request->enunciado->move(public_path("pdf/enunciados/"),$enunuciadoNome); 

        $projecto->enunciado = $enunuciadoNome;

        $projecto->save();
        return redirect('/projecto/lista/')->with('msg', 'Projecto adicionado com sucesso');
    }
}
