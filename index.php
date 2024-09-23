<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica3_Productos</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
    </style>
</head>
<body>
    <h1>Productos</h1>

    <form action="insertar.php" method="POST"> 
        <label for="idprod">ID Producto:</label>
        <input type="text" id="idprod" name="idprod" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required>
        
        <label for="existencia">Existencia:</label>
        <input type="text" id="existencia" name="existencia" required>
        
        <button type="submit">Registrar</button>
    </form>

    <form action="eliminar.php" method="GET">
        <label for="idProd">ID Producto (Eliminar):</label>
        <input type="text" id="idProd" name="idProd" required>
        <button type="submit">Eliminar</button>
    </form>

    <?php include("ventas.php"); ?>  <!-- Muestra la tabla con los productos -->
</body>
</html>
