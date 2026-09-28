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

    echo "Usuario registrado correctamente";

} else {

    echo "Error al registrar el usuario";

}

?>