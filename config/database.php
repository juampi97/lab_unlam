<?php

    class Database{
        private $hostname   = "localhost";
        private $database   = "laboratorio"; 
        private $usuario    = "root"; 
        private $password   = ""; 
        private $charset    = "utf8";
        

    function conectar(){
        try{
            $conexion   = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $options    = [ 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($conexion, $this->usuario, $this->password, $options);

            return $pdo;    
        }
        catch(PDOException $e){
            echo 'Error Conection:' . $e->getMessage();           
            exit;
        }
    }
}
