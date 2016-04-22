<?php
/**
 * Created by PhpStorm.
 * User: tactika
 * Date: 17/09/2015
 * Time: 6:42 PM
 */

namespace libreria\ORM;

class Modelo extends EtORM{

    //propiedad  que va a contener a todas las propiedades dinamicamente
    private $data = array();
    protected static $table;

    function __construct($data = null)
    {
        $this->data = $data;
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name] = $value;
    }

    public function getColumnas(){
        return $this->data;
    }

}