<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

Route::get('/',         [SiteController::class, 'home']);
Route::get('/home',     [SiteController::class, 'home']);
Route::get('/cv',       [SiteController::class, 'cv']);

Route::resource('contato', ContatoController::class);
Route::resource('projetos', ProjetoController::class);


//retorna algo para o usuário
Route::fallback(function(){
  return "Página não encontrada";
});
  
