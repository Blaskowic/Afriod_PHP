<?php
// Seguridad básica
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['correo']) || $_SESSION['rol'] !== 'Administrador') {
    header("Location: ../index.php");
    exit();
}

$usuario = $usuario ?? [];
$usuarios = $usuarios ?? [];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <title>Gestión de Usuarios</title>

        <style>
            :root{
                --arena:#f3ede4;
                --arcilla:#c68642;
                --terracota:#a0522d;
                --madera:#6f4e37;
                --cafe-profundo:#3b2616;
                --oliva:#6b8e23;
                --oro-tierra:#d4a373;
            }

            body{
                background: linear-gradient(135deg,#f3ede4,#efe3d3);
                color: var(--cafe-profundo);
            }

            /* CARDS */
            .card{
                border-radius:14px;
                border:none;
                box-shadow:0 12px 30px rgba(90,60,40,.18);
            }

            /* ENCABEZADO TABLA */
            .thead-tierra{
                background: linear-gradient(90deg,var(--madera),var(--terracota));
                color:white;
                letter-spacing:.5px;
            }

            /* FILAS HOVER */
            .table-hover tbody tr:hover{
                background: linear-gradient(90deg,rgba(212,163,115,.18),rgba(160,82,45,.12));
            }

            /* BOTONES */
            .btn-primary{
                background: linear-gradient(90deg,var(--oliva),var(--oro-tierra));
                border:none;
                color:#2f1f14;
                font-weight:600;
            }

            .btn-primary:hover{
                background: linear-gradient(90deg,var(--oro-tierra),var(--terracota));
            }

            .btn-success{
                background: linear-gradient(90deg,var(--terracota),var(--arcilla));
                border:none;
                font-weight:600;
            }

            .btn-success:hover{
                background: linear-gradient(90deg,var(--arcilla),var(--madera));
            }

            /* INPUTS */
            .form-control{
                border-radius:10px;
            }

            .form-control:focus{
                border-color:var(--oro-tierra);
                box-shadow:0 0 0 .18rem rgba(212,163,115,.35);
            }

            /* ICONOS */
            .bx{
                font-size:1.25rem;
                color:var(--cafe-profundo);
            }

            /* TITULOS */
            label{
                font-weight:600;
                color:var(--madera);
            }
        </style>



    </head>

    <body>

        <div class="container-fluid py-3">

            <!-- FORMULARIO -->
            <div class="card mb-4">
                <div class="card-body">

                    <form action="../controllers/ControladorUsuario.php" method="POST" class="d-flex flex-wrap">

                        <div class="form-row w-100">

                            <?php
                            $tipos = ['Cédula de Ciudadanía', 'Tarjeta de Identidad', 'Cédula de Extranjería'];
                            $niveles = ['Bachiller', 'Técnico', 'Tecnólogo', 'Profesional', 'Especialista', 'Magíster'];
                            $roles = ['Administrador', 'Miembro'];
                            ?>

                            <div class="form-group col-md-2">
                                <label>Tipo Documento</label>
                                <select name="txtTipoDocumento" class="form-control" required>
                                    <?php foreach ($tipos as $t): ?>
                                        <option <?= (($usuario['tipo_documento'] ?? '') == $t) ? 'selected' : '' ?>><?= $t ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label>Número</label>
                                <input class="form-control" name="txtNumDocumento" value="<?= $usuario['id_usuario'] ?? '' ?>" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Nombre completo</label>
                                <input class="form-control" name="txtNombreCompleto" value="<?= $usuario['nombre_completo'] ?? '' ?>" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Celular</label>
                                <input class="form-control" name="txtCelular" value="<?= $usuario['celular'] ?? '' ?>" required>
                            </div>

                            <div class="form-group col-md-2">
                                <label>Correo</label>
                                <input type="email" class="form-control" name="txtCorreo" value="<?= $usuario['correo'] ?? '' ?>" required>
                            </div>

                            <div class="form-group col-md-2">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="txtPassword" placeholder="Solo si desea cambiarla">
                            </div>

                            <div class="form-group col-md-2">
                                <label>Nivel Académico</label>
                                <select name="txtNivelAcademico" class="form-control">
                                    <?php foreach ($niveles as $n): ?>
                                        <option <?= (($usuario['nivel_academico'] ?? '') == $n) ? 'selected' : '' ?>><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Título</label>
                                <input class="form-control" name="txtTitulo" value="<?= $usuario['titulo_academico'] ?? '' ?>">
                            </div>

                            <div class="form-group col-md-2">
                                <label>Rol</label>
                                <select name="txtRol" class="form-control">
                                    <?php foreach ($roles as $r): ?>
                                        <option <?= (($usuario['rol'] ?? '') == $r) ? 'selected' : '' ?>><?= $r ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-12 mt-3 d-flex justify-content-between">
                                <input type="submit" name="accion" value="Agregar" class="btn btn-primary col-5">
                                <input type="submit" name="accion" value="Actualizar" class="btn btn-success col-5">
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <!-- TABLA -->
            <div class="card">
                <div class="card-body table-responsive">

                    <table class="table table-hover table-bordered">
                        <thead class="thead-tierra">
                            <tr>
                                <th>Tipo</th><th>Número</th><th>Nombre</th><th>Celular</th>
                                <th>Correo</th><th>Nivel</th><th>Título</th><th>Rol</th><th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($usuarios as $u): ?>
                                <tr>
                                    <td><?= $u['tipo_documento'] ?></td>
                                    <td><?= $u['id_usuario'] ?></td>
                                    <td><?= $u['nombre_completo'] ?></td>
                                    <td><?= $u['celular'] ?></td>
                                    <td><?= $u['correo'] ?></td>
                                    <td><?= $u['nivel_academico'] ?></td>
                                    <td><?= $u['titulo_academico'] ?></td>
                                    <td><?= $u['rol'] ?></td>
                                    <td class="d-flex">
                                        <a class="btn btn-warning mr-2" href="../controllers/ControladorUsuario.php?accion=Editar&id=<?= $u['id_usuario'] ?>"><i class='bx bxs-edit'></i></a>
                                        <a class="btn btn-danger" href="../controllers/ControladorUsuario.php?accion=Eliminar&id=<?= $u['id_usuario'] ?>" onclick="return confirm('¿Eliminar este usuario?')"><i class='bx bxs-trash'></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <strong>Total de usuarios: <?= count($usuarios) ?></strong>

                </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
