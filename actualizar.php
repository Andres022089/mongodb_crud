<?php

    include "./header.php";
    include "./clases/conexion_mongo.php";
    include "./clases/crud.php";
    $crud= new crud();
    $id= $_POST['id'];
    $datos= $crud->obtenerDocumentos($id);
    $idMongo= $datos->_id;

?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <a href="index.php" class="btn btn-outline-info mt-2"><i class="fa-solid fa-angles-left"></i> Regresar</a>
                            <hr>
                            <h2>Actualizar Registro</h2>
                            <hr>
                            <form action="./procesos/update.php" method="POST">

                                <input type="text" hidden value="<?php echo $idMongo ?>"name=id>
                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $datos->paterno?>">
                                <label for="materno">Apellido Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" value="<?php echo $datos->materno?>">
                                <label for="nombre">Nombres</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->nombre?>">
                                <label for="fechaNacimiento">Fecha Nacimiento</label> 
                                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $datos->fecha_nacimineto?>">

                                <button class="btn btn-warning mt-3"><i class="fa-solid fa-floppy-disk"></i> Actualizar</button>
                            </form>
    
                    <div>
                </div>            
            </div>
        </div>
    </div>


<?php include "./scripts.php"?>