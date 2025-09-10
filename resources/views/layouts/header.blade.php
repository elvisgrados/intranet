<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="nav">
        <img src="logoblanco.png" alt="Logo de la academia">
        <ul class="lists">
            <li data-modal="content1">
                <a href="{{ route('perfil.docente') }}">Perfil</a>
            </li>
            <li data-modal="content2">
                <a href="{{ route('cursos.docente') }}">Cursos</a>
            </li>
            <li data-modal="content3">
                <a href="{{ url('/actividades') }}">Actividades</a>
            </li>
            <li data-modal="content4">
                <a href="{{ url('/comunicaciones') }}">Comunicaciones</a>
            </li>
            <li data-modal="content5">
                <a href="{{ url('/horario') }}">Horario</a>
            </li>
        </ul>
    </div>
</body>
</html>
