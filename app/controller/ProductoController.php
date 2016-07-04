<?php

use App\model\Producto;
use vista\Vista;

class ProductoController
{
    public function index()
    {
        $productos = Producto::all();
        return Vista::crear("admin.producto.index", array(
            "productos" => $productos,
        ));
    }

    public function nuevo()
    {
        return Vista::crear('admin.producto.nuevo');
    }

    public function agregar()
    {
        try {

            $producto = new Producto();
            if (input('producto_id')) {
                $producto = Producto::find(input('producto_id'));
            }

            $producto->nombre = input("nombre");
            $producto->precio = input("precio");
            $producto->guardar();

            redirecciona()->to("producto");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function editar($id)
    {
        $producto = Producto::find($id);
        if (count($producto)) {
            return Vista::crear('admin.producto.nuevo', array("producto" => $producto));
        }
        return redirecciona()->to('producto');
    }

    public function eliminar($id)
    {
        $producto = Producto::find($id);
        if (count($producto)) {
            $producto->eliminar();
            return redirecciona()->to('producto');
        }
        return redirecciona()->to('producto');
    }
}
