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
        $membro->id_equipa = filter_var($id_time,FILTER_SANITIZE_NUMBER_INT);
        //id do manager que publicou
        $user = Auth::user();
        $membro->id_membro=$user->id;
        $membro->estado = "1";
        $membro->save();        
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
            $membro->id_equipa = filter_var(base64_decode($request->id_equipa),FILTER_SANITIZE_NUMBER_INT);
            $membro->id_membro = filter_var($request->id_membro,FILTER_SANITIZE_NUMBER_INT);
            $membro->estado = "0";
            $membro->save();   
            return 1;
        }
        return 0;
    }

    public function remMembro($id_membro){
        DB::table('membros')
            ->where('id_membro', '=', $id_membro)
            ->delete();
        return 1;
    }

    public function aceitarConvite($id_membro){
        DB::table('membros')
              ->where('id_membro', $id_membro)
              ->update(['estado' => "1"]);
        
        return 1;

    }


    
}
