<?php
include('conexion.php');
session_start(); // Inicia la sesión al principio del archivo

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['password'];

    $sql = "SELECT * FROM estudiantes WHERE correo='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            // Contraseña válida, inicio de sesión exitoso
            $_SESSION['usuario_id'] = $row['id']; // Almacena el ID del usuario en la sesión
            $_SESSION['matricula'] = $row['matricula']; // Almacena el nombre del usuario en la sesión
            $_SESSION['carrera'] = $row['carrera']; // Almacena el apellido del usuario en la sesión
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['cuatrimestre']= $row['cuatrimestre'];
            // Puedes agregar más datos según tus necesidades

            header("Location: exam.php");
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Correo no encontrado";
    }
}

$conn->close();
?>
