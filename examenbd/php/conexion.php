<?php
$servername = "localhost"; // Puede ser "localhost" si estás ejecutando MySQL localmente
$username = "root";
$password = "";
$database = "examen";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
