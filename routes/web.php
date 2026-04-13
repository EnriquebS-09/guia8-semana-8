<?php
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[CursoController::class,'inicio'])->name('inicio');

Route::get ('/cursos',[CursoController::class, 'cursos'])->name('cursos');

Route::get ('/cursos/{id}', [CursoController::class ,'detalle'])->name ('detalle.curso');

Route::get('/contacto',[CursoController::class, 'contacto'])->name('contacto');
