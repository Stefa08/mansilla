<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Resultado</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 40px;
        }

        .contenedor {
            width: 450px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,.15);
        }

        h1 {
            text-align: center;
        }

        .dato {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .volver {
            display: block;
            margin-top: 20px;
            text-align: center;
            padding: 12px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Datos del Alumno</h1>

    <div class="dato">
        <strong>Nombre:</strong>
        {{ $datos['nombre'] }}
    </div>

    <div class="dato">
        <strong>Edad:</strong>
        {{ $datos['edad'] }}
    </div>

    <div class="dato">
        <strong>Correo:</strong>
        {{ $datos['correo'] }}
    </div>

    <div class="dato">
        <strong>Promedio:</strong>
        {{ $datos['promedio'] }}
    </div>

    <div class="dato">
        <strong>Promedio Título:</strong>
        {{ $datos['promedio_titulo'] }}
    </div>

    <a href="/" class="volver">
        Volver al formulario
    </a>

</div>

</body>
</html>