<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/perfildoc.css') }}">
    <title>Perfil Docente</title>
</head>
<script>
    function togglePassword(element) {
        const input = element.previousElementSibling;
        const icon = element.querySelector("i");

        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>


<body>
    <br><br>
    <div class="principal">
        <div class="imgperfil">
            <img src="{{asset($docente->foto)}}" alt="Foto de perfil">
        </div>
        <div class="datos">
            <h1>Información básica</h1>
            <div class="datoss">
                <div class="nombres">
                    <p class="asig">Nombre Completo: </p>
                    <p>{{ $docente->nombres }} {{ $docente->apellidos }}</p>
                </div>

                <div class="correo">
                    <p class="asig">Correo académico: </p>
                    <p>{{ $docente->correo_academico }}</p>
                </div>

                <div class="numero">
                    <p class="asig">Número telefónico: </p>
                    <p>{{ $docente->telefono }}</p>
                </div>

                <div class="contraseña">
                    <p class="asig">Contraseña: </p>
                    <p><input type="password" id="password" value="{{ $docente->password }}" readonly>
                    <span class="toggle-password" onclick="togglePassword(this)">
                        <i class="fa-solid fa-eye"></i>
                    </span></p>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
