<?php include "./header.php";?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <a href="index.php" class="btn btn-outline-info"><i class="fa-solid fa-angles-left"></i> Regresar</a>
                            <hr>
                            <h2>Agregar Nuevo Registro</h2>
                            <hr>
                            <form action="./procesos/insertar.php" method="POST">

                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" require>
                                <label for="materno">Apellido Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno">
                                <label for="nombre">Nombres</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" require>
                                <label for="fechaNacimiento">Fecha Nacimiento</label> 
                                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>

                                <button class="btn btn-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Agregar</button>
                            </form>
    
                    <div>
                </div>            
            </div>
        </div>
    </div>


<?php include "./scripts.php"?>