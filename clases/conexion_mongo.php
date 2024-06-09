<?php
    
    

    require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_mongodb/vendor/autoload.php";

    class conexion{
        public function conectar(){
            try {               
                $servidor="localhost";
                $usuario= "mongoadmin";
                $password= "22098822";
                $basedatos= "crud";
                $puerto= "27017";

                $cadenaconexion= "mongodb://".
                                    $usuario . ":" .
                                    $password . "@" .
                                    $servidor . ":" .
                                    $puerto . "/" .
                                    $basedatos;
                $cliente= new MongoDB\Client($cadenaconexion);
                return $cliente->selectDatabase($basedatos);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

    //$objeto= new conexion();
    //var_dump($objeto->conectar());
?>