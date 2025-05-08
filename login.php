<?php
session_start();
include 'db.php'; 

if (isset($_POST['gmail']) && isset($_POST['contaseña'])) {
    $correo = $_POST['gmail'];
    $contrasena = $_POST['contaseña'];

    // Consulta por correo
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = $resultado->fetch_assoc();

    // Verifica que el usuario existe y la contraseña coincide
    if ($contrasena === $usuario['contraseña']) {
        $_SESSION['correo'] = $usuario['correo'];
        $_SESSION['nombre'] = $usuario['nombre'];
        header("Location: admin.php");
        exit;
    } else {
        echo "<script>alert('Correo o contraseña incorrectos'); window.location.href='interfas de login.html';</script>";
        exit;
    }
} else {
    echo "<script>alert('Por favor ingrese sus datos'); window.location.href='index.html';</script>";
    exit;
}
?>
