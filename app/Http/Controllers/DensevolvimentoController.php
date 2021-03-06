<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desenvolvimento;
use Illuminate\Support\Facades\DB;

class DensevolvimentoController extends Controller
{

    public function isProjectoEquipa($id_equipa,$id_projecto){
        $select = DB::table('desenvolvimentos')
            ->where('desenvolvimentos.id_equipa','=',$id_equipa)
            ->where('desenvolvimentos.id_projecto','=',$id_projecto)
            ->count();
        return $select;
    }

    public function addProjecto(Request $request){
        if($this->isProjectoEquipa(base64_decode($request->id_equipa), $request->id_projecto)==0){
            $dev = new Desenvolvimento();
            $dev->id_equipa = filter_var (base64_decode($request->id_equipa), FILTER_SANITIZE_STRING);
            $dev->id_projecto = filter_var ($request->id_projecto,FILTER_SANITIZE_NUMBER_INT);
            $dev->estado = "0";
            $dev->pasta = md5($request->id_equipa.$request->id_projecto).strtotime("now");
            $dev->modificacoes=date("Y-m-d");
            $dev->save();   
            return 1;
        }
        return 0;
    }

    public function pastaProjecto($id_projecto){
        $pasta = Desenvolvimento::orderBy('pasta','desc')->first()->pasta;
        return $pasta;
    }
}
