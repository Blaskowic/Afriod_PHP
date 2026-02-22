<?php
session_start();

if (!isset($_SESSION['correo']) || $_SESSION['rol'] !== 'Miembro') {
    header("Location: ../index.php");
    exit();
}

require_once __DIR__ . '/../config/Connection.php';

$conexion = new Connection();
$pdo = $conexion->connect();

$correo = $_SESSION['correo'];
$mensaje = "";

/* Obtener datos actuales */
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = ?");
$stmt->execute([$correo]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

/* Actualizar datos al enviar el formulario */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $nivel = $_POST['nivel'];
    $titulo = $_POST['titulo'];

    if (!empty($_POST['password'])) {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET nombre_completo=?, celular=?, nivel_academico=?, titulo_academico=?, password=? WHERE correo=?";
        $pdo->prepare($sql)->execute([$nombre, $celular, $nivel, $titulo, $pass, $correo]);
    } else {
        $sql = "UPDATE usuarios SET nombre_completo=?, celular=?, nivel_academico=?, titulo_academico=? WHERE correo=?";
        $pdo->prepare($sql)->execute([$nombre, $celular, $nivel, $titulo, $correo]);
    }

    // Actualizamos los datos en la variable $usuario para que se refleje inmediatamente
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = ?");
    $stmt->execute([$correo]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['nombre'] = $nombre; // actualizar la sesión si la usas en otras partes
    $mensaje = "✅ Tus datos han sido actualizados correctamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root{
            --beige:#f5f2ed;
            --marron:#6f4e37;
            --terracota:#a0522d;
            --oliva:#6b8e23;
        }

        body{
            background:linear-gradient(135deg,var(--beige),#efe3d3);
        }

        .card{
            border-radius:16px;
            box-shadow:0 10px 24px rgba(80,50,30,.15);
        }

        .header{
            background:linear-gradient(90deg,var(--marron),var(--terracota));
            color:white;
            padding:18px;
            border-radius:16px 16px 0 0;
            text-align: center;
        }

        label{
            font-weight:600;
            color:var(--marron);
        }

        .btn-guardar{
            background: var(--oliva);
            color:white;
            font-weight:600;
        }

        .btn-guardar:hover{
            background: var(--terracota);
            color:white;
        }
    </style>
</head>
<body>

<div class="container py-4">

    <div class="card mx-auto" style="max-width:700px">

        <div class="header">
            <h4>Mi Perfil</h4>
            <small>Administra tu información personal</small>
        </div>

        <div class="card-body">

            <?php if ($mensaje): ?>
                <div class="alert alert-success text-center"><?= $mensaje ?></div>
            <?php endif; ?>

            <form action="" method="POST" class="row g-3">

                <div class="col-md-6">
                    <label>Nombre completo</label>
                    <input class="form-control" name="nombre" value="<?= htmlspecialchars($usuario['nombre_completo']) ?>" required>
                </div>

                <div class="col-md-6">
                    <label>Celular</label>
                    <input class="form-control" name="celular" value="<?= htmlspecialchars($usuario['celular']) ?>" required>
                </div>

                <div class="col-md-6">
                    <label>Nivel académico</label>
                    <input class="form-control" name="nivel" value="<?= htmlspecialchars($usuario['nivel_academico']) ?>">
                </div>

                <div class="col-md-6">
                    <label>Título académico</label>
                    <input class="form-control" name="titulo" value="<?= htmlspecialchars($usuario['titulo_academico']) ?>">
                </div>

                <div class="col-md-6">
                    <label>Correo</label>
                    <input class="form-control" value="<?= htmlspecialchars($usuario['correo']) ?>" disabled>
                </div>

                <div class="col-md-6">
                    <label>Nueva contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Dejar vacío si no cambia">
                </div>

                <div class="col-12 text-center mt-3">
                    <button type="submit" class="btn btn-guardar px-5">Guardar Cambios</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
