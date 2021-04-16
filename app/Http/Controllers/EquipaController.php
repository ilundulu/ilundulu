<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Equipa;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\MembroController;
use App\Http\Controllers\DesenvolvimentoController;
use App\Http\Controllers\ProjectoController;

class EquipaController extends Controller
{

    public function create(){
        return view('equipa.create');
    }


    public function store(Request $request){
        $equipa = new Equipa();
        $equipa->nome = $request->nome;
        //id do manager que publicou
        $user = Auth::user();
        $equipa->id_lider=$user->id;
        $equipa->save();

        $membro = new MembroController();
        $membro->adminEquipa($this->last());

        return redirect()->route('equipa.all')->with('msg', 'Equipa criada com sucesso');
    }

    public function all(){       
        $equipas = DB::table('equipas')
            ->select('*')
            ->get();
        return view('equipa.all',['equipas' => $equipas]);
    }  
    
    public function last(){
        $ultimoEquipa = DB::table('equipas')->max('id');
        return $ultimoEquipa;
    }

    public function selectSearch(Request $request){
    	$users = [];

        if($request->has('q')){
            $search = $request->q;
            $users =User::select("users.id", "users.email")
            		->where('users.email', 'LIKE', "$search%")
            		->get();
        }
        return response()->json($users);
    }

    public function addMembro(Request $request){
        $membro = new MembroController();
        $dev = new DensevolvimentoController();
        $projecto = new ProjectoController(); 
        if($membro->addMembro($request) == 1){ 
            return redirect()->route('equipas.membros.all',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'membros'=>$membro->membrosPorEquipa(base64_decode($request->id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($request->id_equipa))])->with('msg', 'Membro convidadado com sucesso');
        }
        return redirect()->route('equipas.membros.all',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'membros'=>$membro->membrosPorEquipa(base64_decode($request->id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($request->id_equipa))])->with('msgError', 'Membro já faz parte da equipa');
    }

    public function remMembro($id_membro,$id_equipa,$nome){
        $membro = new MembroController();
        $dev = new DensevolvimentoController();
        $projecto = new ProjectoController(); 
        $membro->remMembro($id_membro);
        return view('equipa.add_membro',['id_equipa'=>$id_equipa,'nome'=>$nome,'membros'=>$membro->membrosPorEquipa(base64_decode($id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($id_equipa))])->with('msg', 'Membro convidadado com sucesso');
    }

    public function aceitarConvite($id_membro,$id_equipa,$nome){
        $dev = new DensevolvimentoController();
        $membro = new MembroController();
        $membro->aceitarConvite($id_membro);
        $projecto = new ProjectoController(); 
        return view('equipa.add_membro',['id_equipa'=>$id_equipa,'nome'=>$nome,'membros'=>$membro->membrosPorEquipa(base64_decode($id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($id_equipa))])->with('msg', 'Membro convidadado com sucesso');

    }

    public function membroView($id_equipa,$nome){
        $dev = new DensevolvimentoController();
        $membro = new MembroController();
        $projecto = new ProjectoController(); 
        return view('equipa.add_membro',['id_equipa'=>$id_equipa,'nome'=>$nome,'membros'=>$membro->membrosPorEquipa(base64_decode($id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($id_equipa))]);
    }

    public function solicitarProjecto(Request $request){
        $dev = new DensevolvimentoController();
        $membro = new MembroController(); 
        $projecto = new ProjectoController(); 

        if($membro->qtdMembros(base64_decode($request->id_equipa)) > $projecto->qtdElementosProjecto($request->id_projecto)){
            return redirect()->route('equipas.membros.all',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'membros'=>$membro->membrosPorEquipa(base64_decode($request->id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($request->id_equipa))])->with('msgError', "A Equipa precisa de no maximo ".$projecto->qtdElementosProjecto($request->id_projecto)." integrantes");
        }elseif($dev->addProjecto($request) == 1){           
            return redirect()->route('equipas.membros.all',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'membros'=>$membro->membrosPorEquipa(base64_decode($request->id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($request->id_equipa))])->with('msg', 'Solicitação do projecto feita com sucesso');
        }
        return redirect()->route('equipas.membros.all',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'membros'=>$membro->membrosPorEquipa(base64_decode($request->id_equipa)),'projectos'=>$projecto->projectosPorEquipa(base64_decode($request->id_equipa))])->with('msgError', 'A Equipa já solicitou a realização do projecto');
    }

}
