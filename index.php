<?php session_start();
    require_once "./clases/conexion_mongo.php";
    require_once "./clases/crud.php";
    $crud= new crud();
    $datos= $crud->mostrarDatos();

    $mensaje= '';
    if (isset($_SESSION['mensaje_crud'])) {
        $mensaje = $crud->mensajeCrud($_SESSION['mensaje_crud']);
        unset($_SESSION['mensajecrud']);
    }
?>

<?php include "./header.php";?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <h1 class="text-center">Crud Con MongoDB</h1>
                        <hr>
                        <a href="agregar.php" class="btn btn-primary "><i class="fa-solid fa-user-plus"></i> Agregar Nuevo Registro</a>
                        <hr>
                        <br>
                        <table class="table table-sm table-hover table-bordered"> 
                            <thead>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombres</th>
                            <th>Fecha Nacimiento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>                          
                            </thead>
                            <tbody>
                                <?php

                                    foreach($datos as $item){
                                ?>
                                    <tr>
                                        <td><?php echo $item->paterno ;?></td>
                                        <td><?php echo $item->materno;?></td>
                                        <td><?php echo $item->nombre;?></td>
                                        <td><?php echo $item->fecha_nacimineto;?></td>
                                        <td class="text-center">
                                        <form action="actualizar.php" method="POST">
                                                <input type="text" hidden value="<?php echo $item->_id?>"name=id>
                                                <button class="btn btn-warning"><i class="fa-solid fa-user-pen"></i> Editar</button>
                                        </form>
                                        <td class="text-center">
                                            <form action="eliminar.php" method="POST">
                                                <input type="text" hidden value= <?php echo $item->_id ?> name=id>
                                                <button class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i> Eliminar</button>
                                            </form>
                                        </td>                           
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <div>
                </div>            
            </div>
        </div>
    </div>

<?php include "./scripts.php"?>;

<script>
    let mensaje= <?php echo $mensaje; ?>;
    console.log(mensaje);
</script>
    
