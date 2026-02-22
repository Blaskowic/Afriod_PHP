<?php
require_once __DIR__ . '/../config/Connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        $connection = new Connection();
        $pdo = $connection->connect();

        $sql = "SELECT * FROM usuarios WHERE correo = :correo";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['correo' => $username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {

            // 🔐 Guardar datos en sesión (AHORA sí existen)
            $_SESSION['correo'] = $user['correo'];
            $_SESSION['rol'] = $user['rol'];
            $_SESSION['nombre'] = $user['nombre_completo'];
            $_SESSION['tipoDocumento'] = $user['tipo_documento'];
            $_SESSION['idUsuario'] = $user['id_usuario'];

            // 🚦 Redirección por rol
            if ($user['rol'] === 'Administrador') {
                header('Location: ../pages/dashboarAdmin.php');
            } elseif ($user['rol'] === 'Miembro') {
                header('Location: ../pages/dashboarSocio.php');
            } else {
                echo "Acceso denegado";
            }
            exit();

        } else {
            echo "Credenciales Incorrectas";
        }

    } catch (Throwable $th) {
        echo "Error en la conexión: " . $th->getMessage();
    }
}
