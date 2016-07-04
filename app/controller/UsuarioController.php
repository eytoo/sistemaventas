<?php
/**
 * Created by PhpStorm.
 * User: eytoo
 * Date: 7/10/2015
 * Time: 1:06 AM
 */
use \App\model\User;
use \vista\Vista;

class UsuarioController
{

    public function index()
    {
        $usuarios = User::all();
        return Vista::crear("admin.usuario.listado", array(
            "usuarios" => $usuarios,
        ));
    }

    public function nuevo()
    {
        return Vista::crear("admin.usuario.crear");
    }

    public function agregar()
    {
        try {

            $user = new User();
            if (input('usuario_id')) {
                $user = User::find(input('usuario_id'));
            }

            $user->email   = input("email");
            $user->usuario = input("usuario");
            if (input("password")) {
                $user->pass = crypt(input("password"), '$2a$07$usesomesillystringforsalt$');
            }
            $user->privilegio = input("privilegio");
            $user->guardar();

            redirecciona()->to("usuario");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Método para editar usuario
     *
     * @param   int     $id     id del usuario
     * @return  redirect
     */
    public function editar($id)
    {
        $usuario = User::find($id);
        if (count($usuario)) {
            return Vista::crear('admin.usuario.crear', array("usuario" => $usuario));
        }
        return redirecciona()->to('usuario');
    }

    public function eliminar($id)
    {
        $usuario = User::find($id);
        if (count($usuario)) {
            $usuario->eliminar();
            return redirecciona()->to('usuario');
        }
        return redirecciona()->to('usuario');
    }

}
