<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['password'];

    $sql = "SELECT * FROM estudiantes WHERE correo='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            // Contraseña válida, inicio de sesión exitoso
            echo "Inicio de sesión exitoso";
            header("Location: ../examen.html");
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
