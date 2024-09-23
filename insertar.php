<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProd = $_POST['idprod'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];
//inserta ala tabla productos que esta en mysql
    $sql = "INSERT INTO productos (idprod, nombre, precio, existencia) VALUES ('$idProd', '$nombre', '$precio', '$existencia')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto Registrado Con Existo";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("Location: index.php");  // Redirecciona de vuelta al formulario
}
?>
