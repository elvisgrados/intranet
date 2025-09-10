<!DOCTYPE html>
<html lang="es">
    @include('layouts.header')
<head>
    <meta charset="UTF-8">
    <title>Horario de Clases</title>
    <link rel="stylesheet" href="{{ asset('css/horario.css') }}">
</head>
<body>

    <h1>Horario de Clases - Academia Medallón</h1>

    <table class="tabla-horario">
        <thead>
            <tr>
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>8:00 - 9:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9:00 - 10:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10:00 - 10:15</td>
                <td colspan="6" class="receso">Receso</td>
            </tr>
            <tr>
                <td>10:15 - 11:15</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
        </tbody>
    </table>

</body>
</html>
