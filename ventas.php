<?php
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>idprod</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["idprod"] . "</td>
                <td>" . $row["nombre"] . "</td>
                <td>$" . $row["precio"] . "</td>
                <td>" . $row["existencia"] . "</td>
                <td><a href='eliminar.php?idprod=" . $row["idprod"] . "'>Eliminar</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay productos en el inventario.";
}
?>
