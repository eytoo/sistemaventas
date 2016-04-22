<?php

/**
 * Created by PhpStorm.
 * User: imarv
 * Date: 20/11/2015
 * Time: 1:17 AM
 */
use vista\Vista;
class AdminController
{
    public function index(){
        return vista::crear("admin.index");
    }
}