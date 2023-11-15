<?php 
    if(!isset($_GET['idusuario'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $idusuario = $_GET['idusuario'];

    $sentencia = $bd->prepare("DELETE FROM usuarios where idusuario = ?;");
    $resultado = $sentencia->execute([$idusuario]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>