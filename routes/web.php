<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MisCursos;

/*Route::get('/', function () {
    $nombre = "Arturo Espinoza"; 
    return view('welcome', ['nombre' => $nombre]);
});*/

Route::get('/miscursos/{curso}', [MisCursos::class, 'index2']);

/// Vista principal: Lista de alumnos
Route::get('/', [MisCursos::class, 'index']);

// Vista para mostrar el formulario de agregar
Route::get('/nuevo-alumno', function () {
    return view('formularioadd');
});

// Ruta para procesar el guardado (con nombre para el formulario)
Route::post('/adicionar', [MisCursos::class, 'adicionar'])->name('ejemplo.adicionar');