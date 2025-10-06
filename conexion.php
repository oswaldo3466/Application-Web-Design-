<?php
$servername = "localhost";
$username = "root"; // El nombre de usuario predeterminado en XAMPP
$password = ""; // El password predeterminado de MySQL en XAMPP es vacío
$dbname = "mibase"; // El nombre de la base de datos que creaste en phpMyAdmin

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
