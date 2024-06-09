<?php session_start();
    //ini_set('display_errors', 1); //metodos para visualizar los errores
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    
    include "../clases/conexion_mongo.php";
    include "../clases/crud.php";
    $crud = new crud();
    $id= $_POST['id'];

    $respuesta = $crud->eliminar($id);
    //print_r($respuesta);

    if ($respuesta->getDeletedCount()>0) {
        $_SESSION['mensaje_crud']= 'delete';
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }

?>