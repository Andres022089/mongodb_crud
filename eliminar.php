<?php 
    include "./clases/conexion_mongo.php";
    include "./clases/crud.php";
    include "./header.php";

    $crud= new crud();
    $id= $_POST['id'];
    $datos= $crud->obtenerDocumentos($id);
    
?>
   
    <div class="container">
        <div class="row">
            <div class="col" >
                <div class="card mt-4" >
                    <div class="card-body">
                        <a href="index.php" class="btn btn-outline-info"><i class="fa-solid fa-angles-left"></i> Regresar</a>
                            <h2>Eliminar Registro!</h2>
                           
                            <table class="table table-bordered table-danger">
                                <thead>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombre</th>
                                    <th>Fecha Nacimiento</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $datos->paterno;?></td>
                                        <td><?php echo $datos->materno;?></td>
                                        <td><?php echo $datos->nombre;?></td>
                                        <td><?php echo $datos->fecha_nacimineto;?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="alert alert-danger" role="alert">
                                <p>¿Está seguro de eliminar este registro?</p>
                                <p>Una vez eliminado no habra forma de recuperarlo!!</p>
                            </div>
                            <form action="./procesos/borrar.php" method="POST">
                                <input type="text" hidden value="<?php echo $datos->_id ?>" name= 'id'>
                                <button class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i> Eliminar</button>
                            </form>

                    <div>
                </div>            
            </div>
        </div>
    </div>


<?php include "./scripts.php"?>