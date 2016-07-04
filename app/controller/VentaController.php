<?php

use App\model\Venta;
use vista\Vista;

class VentaController
{

    public function index()
    {
        return Vista::crear('admin.venta.index');
    }

    public function nuevo()
    {
        return Vista::crear('admin.venta.nuevo');
    }

    public function agregar()
    {
        $venta          = new Venta();
        $venta->cliente = input('nombre');
        $venta->fecha   = date('Y-m-d');
        if ($venta->guardar()) {
            return redirecciona()->to('venta');
        }
        return redirecciona()->to('venta');
    }

}
