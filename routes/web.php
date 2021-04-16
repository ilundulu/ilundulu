<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipaController;
use App\Http\Controllers\ProjectoController;
use App\Http\Controllers\LinguagemController;
use App\Http\Controllers\MembroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/', [HomeController::class,'index'])->name('home');
//Route::get('/home/logout', [HomeController::class,'logout'])->name('logout');


Route::get('/linguagem/adicionar/', [LinguagemController::class,'create'])->name('linguagem');
Route::get('/linguagem/lista/', [LinguagemController::class,'tDados'])->name('allLinguagem');
Route::post('/linguagem', [LinguagemController::class,'store'])->name('addLinguagem');


Route::get('/projecto/criar/', [ProjectoController::class,'create'])->name("projecto.criar");
Route::post('/projecto', [ProjectoController::class,'store'])->name("projecto.save");
Route::get('/projecto/lista/', [ProjectoController::class,'allProjectosLinguagens'])->name("projecto.lista");
//Route::get('projecto/enunciado/{projecto_nome}/{projecto_enunciado}',function ($projecto_nome,$projecto_enunciado){
    //return view('pdf.show',["nome"=>base64_decode($projecto_nome),"enunciado"=>base64_decode($projecto_enunciado)]);
//})->name('enunciado');

Route::get('projecto/enunciado/{projecto_enunciado}', [ProjectoController::class,'enunciado'])->name('enunciado');
Route::get('/buscar/projectos', [ProjectoController::class, 'selectSearch'])->name("buscar.projectos");


Route::get('/equipa/criar/', [EquipaController::class, 'create'])->name("equipa.criar");
Route::post('/equipa', [EquipaController::class,'store'])->name("equipa.save");
Route::get('/equipa/all/', [EquipaController::class,'all'])->name("equipa.all");
Route::get('/equipa/membro/{id_equipa}/{nome}', [EquipaController::class,"membroView"])->name("equipa.membro.save");

Route::get('/ajax-autocomplete-search', [EquipaController::class, 'selectSearch'])->name("membro");




Route::post('/equipa/membro', [EquipaController::class,'addMembro'])->name("membro.equipa.add");
Route::get('/equipa/membro/all/{id_equipa}/{nome}', [EquipaController::class,'membroView'])->name("equipas.membros.all");
Route::get('/equipa/membro/remover/{id_membro}/{id_equipa}/{nome}', [EquipaController::class,'remMembro'])->name("membro.equipa.remover");
Route::get('/equipa/membro/aceitar/{id_membro}/{id_equipa}/{nome}', [EquipaController::class,'aceitarConvite'])->name("membro.equipa.aceitar");
Route::post('/equipa/projecto/adicionar/', [EquipaController::class,'solicitarProjecto'])->name("projecto.equipa.add");