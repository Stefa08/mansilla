<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Formulario Alumno</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        .contenedor {
            width: 450px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        .campo {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Formulario de Alumno</h1>

    <form method="POST" action="{{ route('guardar') }}">

        @csrf

        <!-- NOMBRE -->
        <div class="campo">

            <label for="nombre">Nombre:</label>

            <input
                type="text"
                id="nombre"
                name="nombre"
                value="{{ old('nombre') }}"
                required
                minlength="2"
                maxlength="50"
            >

            @error('nombre')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>


        <!-- EDAD -->
        <div class="campo">

            <label for="edad">Edad:</label>

            <input
                type="number"
                id="edad"
                name="edad"
                value="{{ old('edad') }}"
                required
                min="1"
                max="120"
                step="1"
            >

            @error('edad')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>


        <!-- CORREO -->
        <div class="campo">

            <label for="correo">Correo:</label>

            <input
                type="email"
                id="correo"
                name="correo"
                value="{{ old('correo') }}"
                required
            >

            @error('correo')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>


        <!-- PROMEDIO -->
        <div class="campo">

            <label for="promedio">Promedio:</label>

            <input
                type="number"
                id="promedio"
                name="promedio"
                value="{{ old('promedio') }}"
                required
                min="1"
                max="10"
                step="0.01"
            >

            @error('promedio')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>


        <!-- PROMEDIO TITULO -->
        <div class="campo">

            <label for="promedio_titulo">Promedio Título:</label>

            <input
                type="number"
                id="promedio_titulo"
                name="promedio_titulo"
                value="{{ old('promedio_titulo') }}"
                required
                min="1"
                max="10"
                step="0.01"
            >

            @error('promedio_titulo')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>


        <button type="submit">
            Enviar
        </button>

    </form>

</div>

</body>
</html>