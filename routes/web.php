<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

Route::get('cursos',[CursoController::class, 'index']);

Route::get('cursos/create',[CursoController::class, 'create']);

Route::get('cursos/{curso}', [CursoController::class, 'show']);

/*
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return "En esta página podras crear un curso: $curso, de la categoría, $categoria";
    }
    else
        return "Bienvenido al curso: $curso";
});