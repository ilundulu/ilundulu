<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class,'index']);
Route::get('/home/logout', [HomeController::class,'logout']);


use App\Http\Controllers\LinguagemController;
Route::get('/linguagem/adicionar/', [LinguagemController::class,'create']);
Route::get('/linguagem/lista/', [LinguagemController::class,'tDados']);
Route::post('/linguagem', [LinguagemController::class,'store']);

use App\Http\Controllers\ProjectoController;
use Illuminate\Support\Facades\Auth;
Route::get('/projecto/criar/', [ProjectoController::class,'create']);
Route::post('/projecto', [ProjectoController::class,'store']);
Route::get('/projecto/lista/', [ProjectoController::class,'tDados']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard',['user'=>$user]);
})->name('dashboard');
