<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DocenteController;
Route::get('/perfil-docente',[DocenteController::class, 'perfilDocente'])->name('perfil.docente');
Route::get('/cursos-docente', [DocenteController::class, 'cursosDocente'])->name('cursos.docente');

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
    return view('cursos');
});
/*
Route::get('/perfildoc', function () {
    return view('perfildoc');
});
*/
Route::get('/actividades', function () {
    return view('actividades');
});

Route::get('/comunicaciones', function () {
    return view('comunicaciones');
});

Route::get('/horario', function () {
    return view('horario');
});
