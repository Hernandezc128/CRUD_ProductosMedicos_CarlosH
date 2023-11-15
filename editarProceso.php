<?php
    print_r($_POST);
    
    if(!isset($_POST['idusuario'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    
    $idusuario = $_POST['idusuario'];
    $nom_cuenta = $_POST['nom_cuenta'];
    $fecha_crea = $_POST['fecha_crea'];
    $correo_us = $_POST['correo_us'];
    $contraseña = $_POST['contraseña'];
    $foto_perfil = $_POST['foto_perfil'];
    $fecha_N = $_POST['fecha_N'];
    $no_tarjeta = $_POST['no_tarjeta'];

    // Corrección en la consulta SQL
    $sentencia = $bd->prepare("UPDATE usuarios SET nom_cuenta = ?, fecha_crea = ?, correo_us = ?, contraseña = ?, foto_perfil = ?, fecha_N = ?, no_tarjeta = ? WHERE idusuario = ?");
    
    $resultado = $sentencia->execute([$nom_cuenta, $fecha_crea, $correo_us, $contraseña, $foto_perfil, $fecha_N, $no_tarjeta, $idusuario]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
?>
