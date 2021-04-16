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
            $dev->id_equipa = base64_decode($request->id_equipa);
            $dev->id_projecto = $request->id_projecto;
            $dev->estado = "0";
            $dev->pasta = md5($request->id_equipa)."/".md5($request->id_projecto).strtotime("now");
            $dev->modificacoes=date("Y-m-d");
            $dev->save();   
            return 1;
        }
        return 0;
    }
}
