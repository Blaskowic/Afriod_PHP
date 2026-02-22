<?php
require_once __DIR__ . '/../config/Connection.php';
session_start();

if (!isset($_SESSION['correo']) || $_SESSION['rol'] !== 'Administrador') {
    header("Location: ../index.php");
    exit();
}

$connection = new Connection();
$pdo = $connection->connect();

$accion = $_REQUEST['accion'] ?? 'Listar';
$usuario = null;

switch ($accion) {

    case 'Agregar':
        $password = password_hash($_POST['txtPassword'], PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("
            INSERT INTO usuarios 
            (id_usuario, tipo_documento, nombre_completo, celular, correo, password, nivel_academico, titulo_academico, rol)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $stmt->execute([
            $_POST['txtNumDocumento'],
            $_POST['txtTipoDocumento'],
            $_POST['txtNombreCompleto'],
            $_POST['txtCelular'],
            $_POST['txtCorreo'],
            $password,
            $_POST['txtNivelAcademico'],
            $_POST['txtTitulo'],
            $_POST['txtRol']
        ]);
        break;

    case 'Editar':
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
        $stmt->execute([$_GET['id']]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        break;

    case 'Actualizar':
        if (!empty($_POST['txtPassword'])) {
            $password = password_hash($_POST['txtPassword'], PASSWORD_DEFAULT);
            $sql = "UPDATE usuarios SET 
                tipo_documento=?, nombre_completo=?, celular=?, correo=?, password=?, 
                nivel_academico=?, titulo_academico=?, rol=? WHERE id_usuario=?";
            $params = [
                $_POST['txtTipoDocumento'],
                $_POST['txtNombreCompleto'],
                $_POST['txtCelular'],
                $_POST['txtCorreo'],
                $password,
                $_POST['txtNivelAcademico'],
                $_POST['txtTitulo'],
                $_POST['txtRol'],
                $_POST['txtNumDocumento']
            ];
        } else {
            $sql = "UPDATE usuarios SET 
                tipo_documento=?, nombre_completo=?, celular=?, correo=?, 
                nivel_academico=?, titulo_academico=?, rol=? WHERE id_usuario=?";
            $params = [
                $_POST['txtTipoDocumento'],
                $_POST['txtNombreCompleto'],
                $_POST['txtCelular'],
                $_POST['txtCorreo'],
                $_POST['txtNivelAcademico'],
                $_POST['txtTitulo'],
                $_POST['txtRol'],
                $_POST['txtNumDocumento']
            ];
        }

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        break;

    case 'Eliminar':
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario=?");
        $stmt->execute([$_GET['id']]);
        break;
}

/* SIEMPRE LISTAR */
$stmt = $pdo->query("SELECT * FROM usuarios ORDER BY nombre_completo");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* ENVIAR A LA VISTA */
require_once __DIR__ . '/../pages/usuarios.php';
