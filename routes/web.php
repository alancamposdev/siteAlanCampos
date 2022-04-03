<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use function PHPUnit\Framework\returnSelf;

Route::get('/',         [SiteController::class, 'home']);
Route::get('/home',     [SiteController::class, 'home']);
Route::get('/cv',       [SiteController::class, 'cv']);

Route::resource('contato', ContatoController::class);
Route::resource('projetos', ProjetoController::class);


//Criando uma area admin
Route::prefix('admin')->name('admin.')->group(function()   {
  //
  Route::resource('/', AdminController::class);
});


//Login
Route::middleware(LogAcessoMiddleware::class)
->get('/login',[LogController::class, 'show'])
->name('login');

//retorna algo para o usuário
Route::fallback(function(){
  return "Página não encontrada";
});
  
