<?php
$servername = "localhost";
$username = "root1";
$password = "root1"; // Si la contraseña no está vacía, pon la contraseña correcta aquí
$dbname = "mandil";

// Crear conexión
$conn =  mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>

