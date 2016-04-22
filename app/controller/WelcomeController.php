<?php
/**
 * User: eytoo
 * Date: 6/10/2015
 * Time: 12:33 AM
 */
use \vista\Vista;
class WelcomeController {

    public function index(){
        return Vista::crear("index");
    }

}