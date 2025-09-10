<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cursos.css') }}">
    <title>Mis Cursos</title>
</head>
<body>
    <h1>Cursos Asignados</h1>

    <ul class="lista-cursos">
        <pre>{{ print_r($docente->cursos->toArray(), true) }}</pre>
        @forelse($docente->cursos as $curso)
            <li>
                <strong>{{ $curso->nombre_curso }}</strong> 
                - Prof. {{ $docente->nombres }} {{ $docente->apellidos }}
                (Ciclo: {{ $curso->pivot->ciclo }})
            </li>
        @empty
            <li>No tienes cursos asignados.</li>
        @endforelse
    </ul>

</body>
</html>
