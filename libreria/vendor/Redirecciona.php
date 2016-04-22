<?php

/*
Para funcionar esta clase debe de incluirse en el core del proyecto
*/
class Redirecciona{

	//función que redirecciona hacia algun lugar
	// parametro: $url - especifica la url a donde se ira ('/hola/nuevo')
	public static function to($url){
		self::redirect($url);
		return new Redirecciona();
	}

	//función que redirecciona a algun lugar llevando dantos en la
	//variable de sesión
	// parametro: $var - nombre de variable de session a crear ó Array de variables de session con valores.
	// parametro: $value - si el parametro var no es un array, esté sería el valor, ejemplo: withMessage("mensaje","hola")
	public static function withMessage($var,$value = null){
		if(is_null($value)){
			foreach ($var as $clave => $valor) {
				$_SESSION[$clave] = $valor;
			}
		}else{
			$_SESSION[$var] = $value;
		}
		return new Redirecciona();
	}

	private function redirect($rute){
		$urlprin = str_replace("index.php","",$_SERVER["PHP_SELF"]);
    	header("location:/".trim($urlprin,"/")."/".trim($rute,"/"));
	}

}