
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Laravel</title>

    <style>

        body{
            margin:0;
            padding:30px;
            font-family:Arial, sans-serif;
            background:#eef2f7;
        }

        .formulario{
            max-width:650px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h1{
            text-align:center;
            color:#234a91;
        }

        .campo{
            margin-bottom:15px;
        }

        label{
            display:block;
            margin-bottom:5px;
            font-weight:bold;
        }

        input,
        select,
        textarea{
            width:100%;
            padding:10px;
            box-sizing:border-box;
            border:1px solid #aaa;
            border-radius:5px;
        }

        .radio label,
        .check label{
            display:block;
            font-weight:normal;
            margin:5px 0;
        }

        .radio input,
        .check input{
            width:auto;
            margin-right:5px;
        }

        .botones{
            display:flex;
            gap:10px;
        }

        button{
            flex:1;
            padding:10px;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        .boton-enviar{
            background:#234a91;
            color:white;
        }

        .boton-limpiar{
            background:#ccc;
        }

    </style>

</head>

<body>

<div class="formulario">

<h1>Registro de datos</h1>

<form action="<?php echo e(route('formulario.recibir')); ?>" method="POST">

<?php echo csrf_field(); ?>

<div class="campo">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre">
</div>

<div class="campo">
    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="apellido">
</div>

<div class="campo">
    <label for="correo">Correo electrónico</label>
    <input type="email" id="correo" name="correo">
</div>

<div class="campo">
    <label for="clave">Contraseña</label>
    <input type="password" id="clave" name="clave">
</div>

<div class="campo">
    <label for="clave2">Repetir contraseña</label>
    <input type="password" id="clave2" name="clave2">
</div>

<div class="campo">
    <label for="edad">Edad</label>
    <input type="number" id="edad" name="edad" min="16" max="80">
</div>

<div class="campo">
    <label for="fecha">Fecha de nacimiento</label>
    <input type="date" id="fecha" name="fecha">
</div>

<div class="campo radio">

    <label>Estado laboral</label>

    <label>
        <input type="radio" name="estado" value="Estudiante">
        Estudiante
    </label>

    <label>
        <input type="radio" name="estado" value="Desempleado">
        Desempleado
    </label>

    <label>
        <input type="radio" name="estado" value="Trabajando">
        Trabajando
    </label>

</div>

<div class="campo check">

    <label>Lenguajes conocidos</label>

    <label>
        <input type="checkbox" name="lenguajes[]" value="PHP">
        PHP
    </label>

    <label>
        <input type="checkbox" name="lenguajes[]" value="Java">
        Java
    </label>

    <label>
        <input type="checkbox" name="lenguajes[]" value="JavaScript">
        JavaScript
    </label>

    <label>
        <input type="checkbox" name="lenguajes[]" value="Python">
        Python
    </label>

</div>

<div class="campo">

    <label for="provincia">Provincia</label>

    <select id="provincia" name="provincia">

        <option value="">Seleccionar</option>
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Santa Fe">Santa Fe</option>
        <option value="Mendoza">Mendoza</option>
        <option value="Capital Federal">Capital Federal</option>

    </select>

</div>

<div class="campo">

    <label for="presentacion">Presentación</label>

    <textarea
        id="presentacion"
        name="presentacion"
        maxlength="100"
        rows="4"></textarea>

</div>

<div class="botones">

    <button type="submit" class="boton-enviar">
        Enviar
    </button>

    <button type="reset" class="boton-limpiar">
        Limpiar
    </button>

</div>

</form>
<?php if(isset($datos)): ?>

<hr>

    <h2>Datos recibidos</h2>

    <p>Nombre: <?php echo e($datos['nombre']); ?></p>
    <p>Apellido: <?php echo e($datos['apellido']); ?></p>
    <p>Correo: <?php echo e($datos['correo']); ?></p>
    <p>Edad: <?php echo e($datos['edad']); ?></p>
    <p>Fecha de nacimiento: <?php echo e($datos['fecha']); ?></p>
    <p>Estado laboral: <?php echo e($datos['estado']); ?></p>

    <p>Lenguajes:
        <?php echo e(implode(', ', $datos['lenguajes'] ?? [])); ?>

    </p>

    <p>Provincia: <?php echo e($datos['provincia']); ?></p>

    <p>Presentación: <?php echo e($datos['presentacion']); ?></p>

    <?php endif; ?>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\FormularioLaravel\resources\views/formulario.blade.php ENDPATH**/ ?>