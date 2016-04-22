<?php
/**
 * Created by PhpStorm.
 * User: tactika
 * Date: 12/09/2015
 * Time: 5:53 PM
 */

require_once("help/helps.php");
define("APP_RUTA",RUTA_BASE."app/");
define("VISTA_RUTA",RUTA_BASE."view/");
define("ASSETS_PATH",RUTA_BASE."assets/");
define("LIBRERIA",RUTA_BASE."libreria/");
define("RUTA",APP_RUTA."rutas/");
define("MODELS",APP_RUTA."model/");

//configuraciones
require_once(RUTA_BASE."config/config.php");
require_once("ORM/Conexion.php");
require_once("ORM/EtORM.php");
require_once("ORM/Modelo.php");
require_once("help/class.inputfilter.php");

//librerias
require_once("vendor/Redirecciona.php");
require_once("vendor/Session.php");

includeModels();
require_once("Vista.php");
include "Ruta.php";
include RUTA."rutas.php";
//echo APP_RUTA;