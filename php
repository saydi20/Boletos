<?php
$servername = "localhost";
$username = "root"; // Cambia este valor si tu base de datos requiere un usuario diferente
$password = ""; // Cambia este valor si tu base de datos requiere una contraseña
$dbname = "sistema_boletos";

// Crea una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
