<?php
/**
 * User: tactika
 * Date: 22/08/2015
 * Time: 5:28 PM
 */

class Conexion{
    public static function conectar(){
        try {
            $cn = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASSWORD);
            return $cn;
        }catch (PDOException $ex){
            //die($ex->getMessage());
        }
    }
}
