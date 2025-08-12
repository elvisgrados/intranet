<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="nav">
        <img src="logoblanco.png" alt="Logo de la academia">
        <ul class="lists">
            <li data-modal="content1">
                <button>
                    <i class="fas fa-user-circle"></i>
                    <span>Datos de Usuario</span>
                </button>
            </li>
            <li data-modal="content2">
                <button>
                    <i class="fas fa-book-open"></i>
                    <span>Cursos</span>
                </button>
            </li>
            <li data-modal="content3">
                <button>
                    <i class="fas fa-tasks"></i>
                    <span>Actividades</span>
                </button>
            </li>
            <li data-modal="content4">
                <button>
                    <i class="fas fa-comments"></i>
                    <span>Comunicaciones</span>
                </button>
            </li>
            <li data-modal="content5">
                <button>
                    <i class="fas fa-calendar-alt"></i>
                    <span>Horario</span>
                </button>
            </li>
        </ul>
    </div>



    <script src="js/index.js?v=1.1"></script>
</body>
</html>
