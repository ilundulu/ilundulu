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
}
