<?php session_start();
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    
    include "../clases/conexion_mongo.php";
    include "../clases/crud.php";

    $crud= new crud();

    $id= $_POST['id'];
    $datos= array(
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimineto" => $_POST['fechaNacimiento']
    );

    $respuesta = $crud-> actualizar($id, $datos);
   //print_r($respuesta);
    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud']= 'update';
       header("location:../index.php");
    }else{
        print_r($respuesta);
    }

?>