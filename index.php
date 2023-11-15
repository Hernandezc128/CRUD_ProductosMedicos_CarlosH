<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from usuarios");
    $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-9">.col-9</div>
        <div class="col-9">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Lista de usuarios
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha de creacion</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Foto de perfil</th>
                                <th scope="col">fecha de nacimiento</th>
                                <th scope="col">No. Tarjeta</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($usuario as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->idusuario; ?></td>
                                <td><?php echo $dato->nom_cuenta; ?></td>
                                <td><?php echo $dato->fecha_crea; ?></td>
                                <td><?php echo $dato->correo_us; ?></td>
                                <td><?php echo $dato->contraseña; ?></td>
                                <td><?php echo $dato->foto_perfil; ?></td>
                                <td><?php echo $dato->fecha_N; ?></td>
                                <td><?php echo $dato->no_tarjeta; ?></td>
                                <td><a class="text-success" href="editar.php?idusuario=<?php echo $dato->idusuario; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?idusuario=<?php echo $dato->idusuario; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre de la cuenta: </label>
                        <input type="text" class="form-control" name="nom_cuenta" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">fecha de creacion: </label>
                        <input type="date" class="form-control" name="fecha_crea" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="email" class="form-control" name="correo_us" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="text" class="form-control" name="contraseña" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto de Perfil: </label>
                        <input type="text" class="form-control" name="foto_perfil" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="fecha_N" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. tarjeta: </label>
                        <input type="text" class="form-control" name="no_tarjeta" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php include 'template/footer.php' ?>