<?php
// print_r($_POST);
if (
    empty($_POST["oculto"]) || 
    empty($_POST["nom_cuenta"]) || 
    empty($_POST["fecha_crea"]) || 
    empty($_POST["correo_us"]) || 
    empty($_POST["contraseña"])  || 
    empty($_POST["foto_perfil"]) || 
    empty($_POST["fecha_N"]) || 
    empty($_POST["no_tarjeta"])
) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';

$nom_cuenta = $_POST["nom_cuenta"];
$fecha_crea = $_POST["fecha_crea"];
$correo_us = $_POST["correo_us"];
$contraseña = $_POST["contraseña"];
$foto_perfil = $_POST["foto_perfil"];
$fecha_N = $_POST["fecha_N"];
$no_tarjeta = $_POST["no_tarjeta"];

$sentencia = $bd->prepare("INSERT INTO usuarios(nom_cuenta, fecha_crea, correo_us, contraseña, foto_perfil, fecha_N, no_tarjeta) VALUES (?, ?, ?, ?, ?, ?, ?);");

$resultado = $sentencia->execute([$nom_cuenta, $fecha_crea, $correo_us, $contraseña, $foto_perfil, $fecha_N, $no_tarjeta]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
} else {
    // Muestra cualquier error de la consulta para depuración
    echo "Error al ejecutar la consulta: " . $sentencia->errorInfo()[2];
    // header('Location: index.php?mensaje=error');
    exit();
}
?>