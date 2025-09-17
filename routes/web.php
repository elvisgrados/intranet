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

// Página inicial (formulario de login)
Route::get('/', function () {
    return view('layouts.login'); // tu vista ahora se llama login.blade.php
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




// Procesar login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Dashboards
Route::get('/admin/dashboard', function () {
    return view('admin'); // admin.blade.php
})->name('admin.dashboard');

Route::get('/docente/dashboard', function () {
    return view('cursos'); // docente.blade.php
})->name('cursos.dashboard');

Route::get('/alumno/dashboard', function () {
    return view('student'); // student.blade.php
})->name('alumno.dashboard');