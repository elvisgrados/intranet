<!DOCTYPE html>
<html lang="es">
    @include('layouts.header')
<head>
    <meta charset="UTF-8">
    <title>Listado de Actividades</title>
    <link rel="stylesheet" href="{{ asset('css/actividades.css') }}">
</head>
<body>

    <h1>Actividades Académicas</h1>

    <ul class="lista-actividades">
        <li>
            <h3>Simulacro N°1</h3>
            <p><strong>Fecha:</strong> 12 de agosto, 2025</p>
            <p><strong>Descripción:</strong> Evaluación general de todos los cursos.</p>
        </li>
        <li>
            <h3>Entrega de trabajos de Química</h3>
            <p><strong>Fecha:</strong> 14 de agosto, 2025</p>
            <p><strong>Descripción:</strong> Tema: Reacciones químicas. Entregar en PDF.</p>
        </li>
        <li>
            <h3>Charla vocacional</h3>
            <p><strong>Fecha:</strong> 16 de agosto, 2025</p>
            <p><strong>Descripción:</strong> Orientación para elegir carrera universitaria.</p>
        </li>
    </ul>

</body>
</html>
