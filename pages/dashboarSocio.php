<?php
session_start();

if (!isset($_SESSION['correo']) || $_SESSION['rol'] !== 'Miembro') {
    header("Location: ../index.php");
    exit();
}

/* Protección contra botón atrás */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$nombre = $_SESSION['nombre'];
$rol = $_SESSION['rol'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel del Miembro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#f3ede4,#efe3d3);
    min-height:100vh;
}

.iframe-container{
    height:75vh;
    margin:20px;
}
</style>
</head>

<body>

<!-- Alerta -->
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?= htmlspecialchars($nombre) ?></strong> — Bienvenido a la comunidad AFROI 🌍
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background:linear-gradient(90deg,#6f4e37,#a0522d);">
<div class="container-fluid">

<h3 class="text-light">MIEMBRO</h3>

<button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="btn btn-outline-light m-1" href="perfil.php" target="myFrame">Mi Perfil</a>
</li>

<li class="nav-item">
<a class="btn btn-outline-light m-1" href="Beneficios.php" target="myFrame">Beneficios</a>
</li>

<li class="nav-item">
<a class="btn btn-outline-light m-1" href="emprendimientos.php" target="myFrame">Emprendimientos</a>
</li>

<li class="nav-item">
<a class="btn btn-outline-light m-1" href="Certificado.php" target="myFrame">Certificados</a>
</li>

</ul>

<div class="dropdown">
<button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
<?= htmlspecialchars($nombre) ?>
</button>

<ul class="dropdown-menu dropdown-menu-end text-center">

<li><img src="../assets/img/InicioSesion.png" width="70" class="my-2 rounded-circle"></li>

<li class="dropdown-item">Correo: <?= htmlspecialchars($_SESSION['correo']) ?></li>
<li class="dropdown-item">Rol: <?= htmlspecialchars($rol) ?></li>

<li><hr class="dropdown-divider"></li>

<li>
<form action="../InicioSesion/CerrarSesion.php" method="post">
<button class="dropdown-item">Salir</button>
</form>
</li>

</ul>
</div>

</div>
</div>
</nav>

<!-- Contenido -->
<div class="iframe-container">
<iframe name="myFrame" style="width:100%; height:100%; border:none;"></iframe>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
