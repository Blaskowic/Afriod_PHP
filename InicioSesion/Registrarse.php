<?php

require_once '../config/Connection.php';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $tipo_documento = $_POST['tipo_ducumento'];
    $cedula = $_POST['cedula'];
    $nombre_completo = $_POST['nombre_completo'];
    $celular = $_POST['celular'];
    $username = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $rol = $_POST['rol'];
    
    try {
        $connection = new Connetion();
        $pdo = $connection->connect();
        
        $sql="INSERT INTO usuarios(tipo_ducumento, cedula, nombre_completo, celular, correo, password, rol "
                . "VALUES (:tipo_documento,:cedula,:nombre_completo,:celular,:correo,:password, :rol)";
        $stmt=$pdo-> prepare($sql);
        $stmt->execute([
            'tipo_documento'=>$tipo_documento,
            'cedula'=> $cedula,
            'nombre_completo'=>$nombre_completo,
            'celular'=> $celular,
            'correo'=> $username,
            'password'=>$password,
            'rol'=>$rol,
        ]);
        
    echo "<script>alert('Usuario Registrado Correcxtamente');"
        . "windows.location.ref='../index.php' </script>";
    } catch (Exception $ex) {
        
    }
}