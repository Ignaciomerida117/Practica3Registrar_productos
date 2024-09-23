<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $idProd = $_GET['idProd'];

    $sql = "DELETE FROM productos WHERE idProd='$idProd'";

    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("Location: index.php");  // Redirecciona de vuelta al formulario
}
?>
