<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipaController;
use App\Http\Controllers\ProjectoController;
use App\Http\Controllers\LinguagemController;

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
Route::post('/projecto', [ProjectoController::class,'store']);
Route::get('/projecto/lista/', [ProjectoController::class,'allProjectosLinguagens'])->middleware();
Route::get('projecto/enunciado/{projecto_nome}/{projecto_enunciado}',function ($projecto_nome,$projecto_enunciado){
    return view('pdf.show',["nome"=>base64_decode($projecto_nome),"enunciado"=>base64_decode($projecto_enunciado)]);
});


Route::get('/teste', [EquipaController::class, 'show']);
Route::post('/equipa', [EquipaController::class, 'store']);
Route::get('/ajax-autocomplete-search', [EquipaController::class, 'selectSearch']);
