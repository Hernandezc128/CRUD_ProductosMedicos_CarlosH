<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['idusuario'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $idusuario = $_GET['idusuario'];

    $sentencia = $bd->prepare("select * from usuarios where idusuario = ?;");
    $sentencia->execute([$idusuario]);
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre de la cuenta: </label>
                        <input type="text" class="form-control" name="nom_cuenta" required 
                        value="<?php echo $usuario->nom_cuenta; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de creacion: </label>
                        <input type="text" class="form-control" name="fecha_crea" autofocus required
                        value="<?php echo $usuario->fecha_crea; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="email" class="form-control" name="correo_us" autofocus required
                        value="<?php echo $usuario->correo_us; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">contraseña: </label>
                        <input type="text" class="form-control" name="contraseña" required 
                        value="<?php echo $usuario->contraseña; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto de perfil: </label>
                        <input type="text" class="form-control" name="foto_perfil" autofocus required
                        value="<?php echo $usuario->foto_perfil; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de nacimiento: </label>
                        <input type="text" class="form-control" name="fecha_N" autofocus required
                        value="<?php echo $usuario->fecha_N; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. tarjeta: </label>
                        <input type="text" class="form-control" name="no_tarjeta" autofocus required
                        value="<?php echo $usuario->no_tarjeta; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>