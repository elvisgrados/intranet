<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACADEMIA MEDALLON</title>
    <link rel="icon" href="{{ asset('../img/icono.jpg') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Iniciar Sesión</h1>
            <div class="input-box">
                <input type="text" name="correo" placeholder="Usuario"
                require>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Contraseña"
                require>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Recordar usuario</label>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit" class="btn">Ingresar</button>

        </form>
    </div>

</body>
</html>