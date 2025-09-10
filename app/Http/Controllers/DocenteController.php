<?php

namespace App\Http\Controllers;

use App\Models\Docente;


class DocenteController extends Controller{
    public function perfilDocente(){
        // Obtén el primer docente como prueba
        $docente = Docente::first();

        return view('perfildoc', compact('docente'));
    }

    public function cursosDocente(){
    // Cargar al docente con sus cursos
    $docente = Docente::with('cursos')->first();

    return view('cursos', compact('docente'));
}
}
