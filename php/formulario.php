<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $nombre = $_POST['nombre'];
    $cuatrimestre = $_POST['cuatrimestre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'],PASSWORD_DEFAULT);

    $sql = "INSERT INTO estudiantes (matricula, carrera, nombre, cuatrimestre, correo, contrasena) VALUES ('$matricula', '$carrera', '$nombre', '$cuatrimestre', '$correo', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
        header("Location: ../login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
