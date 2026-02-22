<?php
session_start();

if (!isset($_SESSION['correo'])) {
    header("Location: ../index.php");
    exit();
}

$nombre_completo = $_SESSION['nombre'] ?? '';
$correo = $_SESSION['correo'] ?? '';
$tipoDocumento = $_SESSION['tipoDocumento'] ?? '';
$idUsuario = $_SESSION['idUsuario'] ?? '';
$rol = $_SESSION['rol'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Certificado AFROI</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Roboto&display=swap" rel="stylesheet">

<style>
body {
    background:#f5f1ea;
    font-family:'Roboto', sans-serif;
}

.actions {
    text-align:center;
    margin:20px;
}

.btn {
    padding:10px 25px;
    border:none;
    background:#8b5e3c;
    color:white;
    border-radius:6px;
    cursor:pointer;
    font-size:1rem;
}

.btn:hover { background:#5d4037; }

.cert-container {
    width:85%;
    margin:auto;
    padding:60px;
    border:10px double #8b5e3c;
    border-radius:18px;
    background:white;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
    position:relative;
    overflow:hidden;
}

/* Marca de agua */
.cert-container::before {
    content:"";
    position:absolute;
    inset:0;
    background:url("../assets/img/AFROI2.png") no-repeat center;
    background-size:60%;
    opacity:0.08;
    z-index:0;
}

.cert-container * { position:relative; z-index:1; }

.cert-header {
    text-align:center;
    margin-bottom:40px;
}

.cert-header h1 {
    font-family:'Playfair Display', serif;
    font-size:2.7rem;
    margin:0;
    color:#5d4037;
}

.cert-header p {
    font-size:1.2rem;
    color:#6d4c41;
}

.cert-body {
    text-align:center;
    margin:40px 0;
    line-height:1.7;
    font-size:1.1rem;
}

.name {
    font-size:1.8rem;
    font-weight:bold;
    margin:15px 0;
    color:#000;
}

.cert-footer {
    display:flex;
    justify-content:space-around;
    margin-top:60px;
}

.signature {
    border-top:1px solid #333;
    width:220px;
    text-align:center;
    padding-top:6px;
    font-weight:500;
}

@media print {
    .actions { display:none; }
    body { background:white; }
}
</style>
</head>

<body>

<div class="actions">
    <button class="btn" onclick="window.print()">🖨 Imprimir</button>
</div>

<div class="cert-container">

    <div class="cert-header">
        <h1>ASOCIACIÓN AFROI</h1>
        <p>Certificado Oficial de Pertenencia</p>
    </div>

    <div class="cert-body">
        <p>Se certifica que:</p>

        <div class="name"><?= htmlspecialchars($nombre_completo) ?></div>

        <p>
            Documento: <strong><?= htmlspecialchars($idUsuario) ?></strong><br>
            Rol: <strong><?= htmlspecialchars($rol) ?></strong>
        </p>

        <p style="margin-top:20px;">
            Fecha de expedición: <strong><?= date("d/m/Y") ?></strong>
        </p>
    </div>

    <div class="cert-footer">
        <div class="signature">Presidenta</div>
        <div class="signature">Vicepresidenta</div>
        <div class="signature">Secretario</div>
    </div>

</div>

</body>
</html>
