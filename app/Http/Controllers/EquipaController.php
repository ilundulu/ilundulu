<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Equipa;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        return redirect()->route('equipa.all')->with('msg', 'Linguagem adicionada com sucesso');
    }

    public function all(){       
        $equipas = DB::table('equipas')
            ->select('*')
            ->get();
        return view('equipa.all',['equipas' => $equipas]);
    }    

    public function selectSearch(Request $request)
    {
    	$users = [];

        if($request->has('q')){
            $search = $request->q;
            $users =User::select("id", "email")
            		->where('email', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($users);
    }

    public function show(){
        
        return view('teste.autocomplete');
    }

}
