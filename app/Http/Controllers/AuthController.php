<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request){

        $correo = $request->input('correo');
        $password = $request->input('password');
        $usuario = DB::table('usuarios')
        ->where('correo', $correo)
        ->where('password', $password)
        ->first();
    
        if ($usuario) {
            switch (strtolower($usuario->rol)) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'docente':
                    return redirect()->route('docente.dashboard');
                case 'alumno':
                    return redirect()->route('alumno.dashboard');
            }
        }

        return back()->withErrors(['login' => 'Usuario o contraseña incorrectos']);
    }
}