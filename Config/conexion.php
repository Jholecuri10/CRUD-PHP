<?php

class conexion{

    public static function conectar(){
        $cnn = new PDO("mysql:host=localhost;dbname=necesidad;charset=utf8","root","");
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $cnn;

    }


}