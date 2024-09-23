<?php
$host = "localhost";// host local
$user = "root";  // Usuario de MySQL
$password = "Ignacio117";  // Contraseña de MySQL
$dbname = "inventario";  // Nombre de la base de datos
$port= "3306"; // puerto de MYSQL 

// Conexión a la base de datos pidiendo los campos
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar si la conexión es correcta
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
