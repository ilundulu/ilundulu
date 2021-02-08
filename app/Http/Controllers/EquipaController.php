<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
class EquipaController extends Controller
{
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

    public function store(Request $request){
        //$linguagem = new Linguagen();
        var_dump($request);
    }
}
