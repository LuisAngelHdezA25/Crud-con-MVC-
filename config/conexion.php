<?php
//Creamos una clase en donde se estara haciendo la conexion a la base de datos//
 class Conectar{
    //Protected se usa para que se puedan utilizar las variables , metodos  y funciones solo en la clase que fue hecha y subclases que se hereden //
    protected $dbh;
    protected function Conexion(){
        try{
       //Esta es la cadena de conexion//
            $conectar =$this->dbh=new PDO("mysql:local=localhost;dbname=crud2","root","");
      //Siempre tenemos que retornar la cadena de conexion//
            return $conectar;  
    }
        catch(Exception $e){
            print " Error BD: " .$e->getMessage() ."<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
 }
?>