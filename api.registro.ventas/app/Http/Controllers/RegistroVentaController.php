<?php

namespace App\Http\Controllers;

use App\Models\RegistroVenta;
use Illuminate\Http\Request;

class RegistroVentaController extends Controller
{
    public function store(Request $request)
    {

        $venta = RegistroVenta::create([

            'idCliente' => $request->idCliente,
            'idProducto' => $request->idProducto,
            
        ]);

        return $venta;


    }
}
