<?php
include 'db.php';

// Obtener los valores del formulario
$producto = $_POST["producto"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];
$fecha_registro = $_POST["fecha_registro"];

// Preparar la consulta SQL (no incluimos la columna id_producto porque es AUTO_INCREMENT)
$sql = "INSERT INTO productos (nombre_producto, descripcion, categoria, precio, stock, fecha_registro)
        VALUES (?, ?, ?, ?, ?, ?)";

// Preparar la declaración
$stmt = $conexion->prepare($sql);

// Vincular los parámetros a la consulta preparada
$stmt->bind_param("ssssds", $producto, $descripcion, $categoria, $precio, $stock, $fecha_registro);

// Ejecutar la consulta
if ($stmt->execute()) {
    header("Location: gestion_productos.html"); // Redirigir a la página de productos
    exit();
} else {
    echo "Error: " . $stmt->error; // Mostrar mensaje de error si ocurre
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->close();
?>
