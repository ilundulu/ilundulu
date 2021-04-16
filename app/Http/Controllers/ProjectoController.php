<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Desenvolvimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Projecto;
use App\Models\Linguagen;
use Illuminate\Support\Facades\DB;
use ZipArchive;
use App\Http\Controllers\DensevolvimentoController;

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
        if($extencao == "pdf"){
            $enunuciadoNome= md5($projecto->nome."-".strtotime("now")).'.'.$extencao;
            $request->enunciado->move(public_path("pdf/enunciados/"),$enunuciadoNome); 
            $projecto->enunciado = $enunuciadoNome;
        }else{
            return redirect('/projecto/lista/')->with('msgErrorPdf', "A extensão ".$extencao." não é valida por favor use PDF");
        }
        $projecto->save();
        return redirect('/projecto/lista/')->with('msg', 'Projecto adicionado com sucesso');
    }

    public function allProjectosLinguagens(){       
        $projectos = DB::table('projectos')
            ->join('linguagens', 'projectos.id_linguagem', '=', 'linguagens.id')
            ->join('users', 'projectos.id_user', '=', 'users.id')
            ->select('projectos.*', DB::raw('linguagens.nome as lpname'), DB::raw('users.name as usname'))
            ->get();
        return view('projecto.todos',['projectos' => $projectos]);
    }

    public function enunciado($enunciado){
        return view('pdf.show',['enunciado' => $enunciado]);
    }  

    public function selectSearch(Request $request)
    {
    	$projectos = [];

        if($request->has('q')){
            $search = $request->q;
            $projectos =Projecto::select("projectos.id", "projectos.nome")
            		->where('projectos.nome', 'LIKE', "$search%")
            		->get();
        }
        return response()->json($projectos);
    }
    public function projectosPorEquipa($id_equipa){
        $projectos = DB::table('desenvolvimentos')
            ->join('projectos', 'projectos.id', '=', 'desenvolvimentos.id_projecto')
            ->join('linguagens', 'linguagens.id', '=', 'projectos.id_linguagem')
            ->where('desenvolvimentos.id_equipa',$id_equipa)
            ->select('desenvolvimentos.*', DB::raw('linguagens.nome as lpname'), DB::raw('projectos.nome as projname'), DB::raw('projectos.enunciado as enunciado'))
            ->get();
        return $projectos;
    }

    public function qtdElementosProjecto($id_projecto){
        $qtd = Projecto::orderBy('integrantes','desc')->first()->integrantes;
        return $qtd;
    }

    public function listaFiles($pasta){
        $diretorio = dir($pasta);
        $array1 = [];
        while($array = $diretorio->read()){
            array_push($array1,$array);
        }
        return $array1; 
    }

    public function codigo($id_equipa,$nome,$id_projecto){
        //pasta
        $dev = new DensevolvimentoController();
        $pasta = public_path("projectos/".$dev->pastaProjecto($id_projecto)); 
        return view('projecto.codigo',['id_equipa'=>$id_equipa,'nome'=>$nome,'id_projecto'=>$id_projecto,'files'=>$this->listaFiles($pasta)]);
    }

    public function apagarFiles($pasta){
        $diretorio = dir(public_path("projectos/".$pasta));

        while($array = $diretorio->read()){
            if($array != '.' && $array != '..'){
                unlink(public_path("projectos/".$pasta."/".$array));
            }
        }

        $diretorio->close();
    }


    public function descompactar($ficheiro,$pasta){
        $zip = new ZipArchive();
        if($zip->open($ficheiro)===TRUE){
            $zip->extractTo(public_path("projectos/".$pasta));
            $zip->close();
            return 1;
        }
        return 0;
    }

    public function isPastaEmpty($pasta){
        $diretorio = dir($pasta);
        return ($diretorio == 'empty')?1:0;
    }


    public function upload(Request $request){
        $codigoZip = $request->codigo;
        $dev = new DensevolvimentoController();
        $extencao = $codigoZip->extension();
        $pasta = $dev->pastaProjecto($request->id_projecto);
        
        if($extencao == "zip"){
            if($this->isPastaEmpty(public_path("projectos/".$pasta)) == 1){
                $this->descompactar($request->codigo,$pasta);
                return redirect()->route('equipa.projecto.dev',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'id_projecto'=>$request->id_projecto,'files'=>$this->listaFiles(public_path("projectos/".$pasta))])->with('msg', 'Carregamento feito');
            }else{
                $this->apagarFiles($pasta);
                $this->descompactar($request->codigo,$pasta);
                return redirect()->route('equipa.projecto.dev',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'id_projecto'=>$request->id_projecto,'files'=>$this->listaFiles(public_path("projectos/".$pasta))])->with('msg', 'Carregamento feito');
            }
        }
        return redirect()->route('equipa.projecto.dev',['id_equipa'=>$request->id_equipa,'nome'=>$request->nome,'id_projecto'=>$request->id_projecto,'files'=>$this->listaFiles(public_path("projectos/".$pasta))])->with('msgErrorPdf', "A extensão ".$extencao." Não suportada");
    }
}
