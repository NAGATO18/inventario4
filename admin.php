<?php session_start(); if (!isset($_SESSION['nombre'])) {     header("Location: index.html");     exit; } $nombre = $_SESSION['nombre']; ?> 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bienvenido</title>
  <link rel="stylesheet" href="bienvenida.css" />
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <div class="profile-pic">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#555">
          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
        </svg>
      </div>
      <div class="user-name"><?php echo htmlspecialchars($nombre); ?></div>
      <div class="user-role">Usuario</div>
    </div>
    
    <div class="right-panel">
      <div class="form-box">
        <h1>¡Bienvenido, <span><?php echo htmlspecialchars($nombre); ?>!</span></h1>
        <p>Has iniciado sesión correctamente. Selecciona una opción para continuar:</p>
        
        <div class="section-title">Opciones</div>
        
        <!-- Botón que lleva a inter_producto.html -->
        <div class="buttons">
          <a href="gestion_productos.html">
            <button class="arrow-btn">
              Ir a productos <span class="arrow-icon">→</span>
            </button>
          </a>
        </div>
        
        <!-- Botón que lleva a InterfaxGrafica.html -->
        <div class="buttons">
          <a href="InterfaxGrafica.html">
            <button class="arrow-btn">
              Ir a inventario <span class="arrow-icon">→</span>
            </button>
          </a>
        </div>
        
        <!-- Botón cerrar sesión -->
        <div class="buttons">
          <a href="logout.php">
            <button class="login-btn">Cerrar sesión</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>