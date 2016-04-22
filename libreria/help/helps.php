<?php
/**
 * Created by Cesar Cueva Mejia.
 * User: tactika
 * Date: 17/09/2015
 * Time: 6:51 PM
 */
/*
 * función que nos permite incluir los modelos dinamicamente
 * */
function includeModels(){
    $directorio = opendir(MODELS);
    while($archivo = readdir($directorio)){
        if(!is_dir($archivo)){
            require_once MODELS.$archivo;
        }
    }
}
/*
 * esta funcion no va a ayudar a retornar un asset
 * - $asset : nombre del archivo que esta dentro de asset
 * */
function asset($asset){
    $urlprin = trim(str_replace("index.php","",$_SERVER["PHP_SELF"]),"/");
    echo "/".$urlprin."/assets/".$asset;
}
/*
 * función que permite redireccionar hacia otra parte
 * - $rute : ruta hacia donde queremos dirigirnos
 * */
function redirecionar($rute){
    $urlprin = str_replace("index.php","",$_SERVER["PHP_SELF"]);
    
    echo $urlprin;
    //header("location:/".trim($urlprin,"/")."".$rute);
}
/*
 * función que nos permite escribir una url por medio del que le pasamos
 * $rute : ruta hacia donde se va a ir.
 * */
function url($rute){
    $urlprin = str_replace("index.php","",$_SERVER["PHP_SELF"]);
    echo "/".trim($urlprin,"/")."/".$rute;
}
/*
 * funcion que crea el csrf, para la validación - token
 * */
session_start();
function csrf_token(){
    if(isset($_SESSION["token"])){
        unset($_SESSION["token"]);
    }
    $csrf_token = md5(uniqid(mt_rand(), true));
    $_SESSION["csrf_token"] = $csrf_token;
    echo $csrf_token;
}
/*
 * validar csrf_token, por medio de sesiones
 * */
function val_csrf(){
    if($_REQUEST["_token"] == $_SESSION["csrf_token"]){
        return true;
    }else{
        return false;
    }
}
/*
 * funcion que nos permite recuperar un input
 * */
function input($name){
    $re = new \Library\help\Request();
    return $re->input($name);
}
/*
 * Funcion que nos permite retornar json a partir de un array
 * */
function json_response($data){
    header('Content-Type: application/json');
    if(is_array($data)){
        $array = array();
        foreach($data as $d){
            array_push($array,$d->getColumnas());
        }
        return json_encode($array);
    }else{
        return json_encode($data->getColumnas());
    }
}
/*
 * Permite encriptar un string
 * */
function encriptar($string){
    return crypt($string,'$2a$07$usesomesillystringforsalt$');
}

/*
redireccionar
*/
function redirecciona(){
    return new Redirecciona();
}