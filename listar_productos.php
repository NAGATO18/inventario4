<?php
include 'db.php';

// Consulta de los productos
$sql = "SELECT id_producto, nombre_producto, descripcion, categoria, precio, stock, fecha_registro FROM productos";
$resultado = $conexion->query($sql);

// Verifica si hay resultados
if ($resultado->num_rows > 0) {
    // Si hay productos, genera la tabla
    echo '<table border="1" cellpadding="5" cellspacing="0" width="100%">';
    echo '<tr>
            <th>ID</th>
            <th>PRODUCTO</th>
            <th>DESCRIPCIÓN</th>
            <th>CATEGORÍA</th>
            <th>PRECIO</th>
            <th>STOCK</th>
            <th>FECHA REGISTRO</th>
          </tr>';
    
    // Itera a través de los productos y los imprime
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($fila['id_producto']) . "</td>
                <td>" . htmlspecialchars($fila['nombre_producto']) . "</td>
                <td>" . htmlspecialchars($fila['descripcion']) . "</td>
                <td>" . htmlspecialchars($fila['categoria']) . "</td>
                <td>" . htmlspecialchars($fila['precio']) . "</td>
                <td>" . htmlspecialchars($fila['stock']) . "</td>
                <td>" . htmlspecialchars($fila['fecha_registro']) . "</td>
              </tr>";
    }
    
    echo '</table>';
} else {
    echo '<p>No se encontraron productos.</p>';
}

// Cierra la conexión
$conexion->close();
?>
