<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Membro;
use Illuminate\Support\Facades\DB;

class MembroController extends Controller
{
    public function adminEquipa($id_time){
        $membro = new Membro();
        $membro->id_equipa = $id_time;
        //id do manager que publicou
        $user = Auth::user();
        $membro->id_membro=$user->id;
        $membro->estado = "1";
        $membro->save();        
    }

    public function equipas(){
        
    }

    public function membrosPorEquipa($id_equipa){
        $membros = DB::table('membros')
            ->join('users', 'users.id', '=', 'membros.id_membro')
                ->where('membros.id_equipa','=',$id_equipa)
            ->join('equipas', 'equipas.id', '=', 'id_equipa')
            ->select('users.*', 'membros.estado', 'membros.id_membro', 'equipas.id_lider')
            ->get();
        return $membros;
    }

    public function membroView($id_equipa,$nome){
        return view('equipa.add_membro',['id_equipa'=>$id_equipa,'nome'=>$nome,'membros'=>$this->membrosPorEquipa(base64_decode($id_equipa))]);
    }

    public function qtdMembros($id_equipa){
        $qtd = DB::table('membros')
            ->where('membros.id_equipa','=',$id_equipa)
            ->count();
        return $qtd;
    }

    public function isEquipaMembro($id_equipa,$id_membro){
        $select = DB::table('membros')
            ->where('membros.id_equipa','=',$id_equipa)
            ->where('membros.id_membro','=',$id_membro)
            ->count();
        return $select;
    }

    public function addMembro(Request $request){
        if($this->isEquipaMembro(base64_decode($request->id_equipa), $request->id_membro)==0){
            $membro = new membro();
            $membro->id_equipa = base64_decode($request->id_equipa);
            $membro->id_membro = $request->id_membro;
            $membro->estado = "0";
            $membro->save();   
            return redirect()->route('equipas.membros.all',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'membros'=>$this->membrosPorEquipa(base64_decode($request->id_equipa))])->with('msg', 'Membro convidadado com sucesso');
        }
        return redirect()->route('equipas.membros.all',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'membros'=>$this->membrosPorEquipa(base64_decode($request->id_equipa))])->with('msgError', 'Membro já faz parte da equipa');
    }

    public function remMembro($id_membro,$id_equipa,$nome){
        DB::table('membros')
            ->where('id_membro', '=', $id_membro)
            ->delete();
        return view('equipa.add_membro',['id_equipa'=>$id_equipa,'nome'=>$nome,'membros'=>$this->membrosPorEquipa(base64_decode($id_equipa))])->with('msg', 'Membro convidadado com sucesso');
    }

    public function aceitarConvite($id_membro,$id_equipa,$nome){
        DB::table('membros')
              ->where('id_membro', $id_membro)
              ->update(['estado' => "1"]);
        
        return view('equipa.add_membro',['id_equipa'=>$id_equipa,'nome'=>$nome,'membros'=>$this->membrosPorEquipa(base64_decode($id_equipa))])->with('msg', 'Membro convidadado com sucesso');

    }


    
}
