<?php

class ConexionBD{
    public function conexion(){
        $bd=new PDO("mysql:host=localhost;dbname=sistemauniversidad","root","");
        $bd->exec("set names utf8");

        return $bd;
    }
}