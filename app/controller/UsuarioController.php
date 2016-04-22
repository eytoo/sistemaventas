<?php
/**
 * Created by PhpStorm.
 * User: eytoo
 * Date: 7/10/2015
 * Time: 1:06 AM
 */
use \vista\Vista;
use \App\model\User;
class UsuarioController {

    public function index(){
        $usuarios = User::all();
        return Vista::crear("admin.usuario.listado",array(
            "usuarios"=>$usuarios,
        ));
    }

    public function nuevo(){
        return Vista::crear("admin.usuario.crear");
    }

    public function agregar(){
        try {
            
            $user = new User();
            $user->email=input("email");
            $user->usuario=input("usuario");
            $user->pass=crypt(input("password"),'$2a$07$usesomesillystringforsalt$');
            $user->privilegio = input("privilegio");
            $user->guardar();

            redirecciona()->to("usuario");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}