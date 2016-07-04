<?php
//todas las rutas disponibles en nuestra aplicación
$ruta = new Ruta();
$ruta->controladores(array(
    "/"         => "WelcomeController",
    "/login"    => "AuthController",
    "/usuario"  => "UsuarioController",
    "/venta"    => "VentaController",
    "/producto" => "ProductoController",
    "/admin"    => "AdminController",
));
