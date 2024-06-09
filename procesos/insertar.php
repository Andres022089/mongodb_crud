<?php session_start();
    //ini_set('display_errors', 1); metodos para visualizar los errores
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    
    include_once "../clases/conexion_mongo.php";
    include_once "../clases/crud.php";

    $crud= new crud();

    // Verificar si se han recibido datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se han recibido los campos 'paterno' y 'nombre y fecha, materno no porque a veces los usuarios tienen un solo apellido'
        if (!empty($_POST["paterno"]) && !empty($_POST["nombre"]) && !empty($_POST["fechaNacimiento"])){
            $datos= array(
                "paterno" => $_POST['paterno'],
                "materno" => $_POST['materno'],
                "nombre" => $_POST['nombre'],
                "fecha_nacimineto" => $_POST['fechaNacimiento']
            );
            $respuesta= $crud-> insertarDatos($datos);

            if ($respuesta-> getInsertedId() > 0) {
                $_SESSION['mensaje_crud']= 'insert';
                header('location:../index.php');
            }else{
                print_r($respuesta);
            }
        }else{
            echo "Faltan campos por completar!";
        }
    }

?>