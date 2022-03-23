<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',         [SiteController::class, 'home']);
Route::get('/home',     [SiteController::class, 'home']);
Route::get('/cv',       [SiteController::class, 'cv']);

Route::resource('contato', ContatoController::class);
Route::resource('projeto', ProjetoController::class);