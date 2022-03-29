<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', [UsuarioController::class, 'cadastrar']);

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
    return 'Minha primeira rota';
});

Route::get('contato',function(){
    return 'Minha segunda rota';
});
*/