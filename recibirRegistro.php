<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro | PEAK</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php

// conexion servidor Mysql

$conexion = mysqli_connect("localhost", "root", "", "sitiopeak");


// recibir datos del formulario

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];


// insertar datos en la tabla usuarios

$consulta = "INSERT INTO usuarios (nombre, apellido, email, password)
VALUES ('$nombre', '$apellido', '$email', '$password')";

$resultado = mysqli_query($conexion, $consulta);


// comprobar si se guardaron los datos

if ($resultado) {

    echo '
    <div class="registro-exitoso">
        <div class="mensaje-registro">
            <h1>¡BIENVENIDO A PEAK!</h1>
            <p>Tu cuenta fue creada correctamente.</p>
            <p class="subtexto">Ya sos parte de la comunidad PEAK 🍦</p>

            <a href="index.php">VOLVER AL INICIO</a>
        </div>
    </div>
    ';

} else {

    echo '
    <div class="registro-error">
        <div class="mensaje-registro">
            <h1>¡UPS!</h1>
            <p>No pudimos crear tu cuenta.</p>
            <p class="subtexto">Revisá tus datos e intentá nuevamente.</p>

            <a href="registro.php">VOLVER A INTENTAR</a>
        </div>
    </div>
    ';
}

?>
</body>
</html>