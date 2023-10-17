<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');


Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
Route::post('/cadcategoria', [CategoriaController::class, 'cadastroCat'])->name("cadastro-categoria");

Route::get('/cadcurso',[cursoController::class,'mostrarFormCur'])->name("form-cadastro-curso");
Route::post('/cadcurso', [cursoController::class, 'cadastroCur'])->name("cadastro-curso");

Route::get('/cadaula',[aulaController::class,'mostrarFormAul'])->name("form-cadastro-aula");
Route::post('/cadaula', [aulaController::class, 'cadastroAul'])->name("cadastro-aula");