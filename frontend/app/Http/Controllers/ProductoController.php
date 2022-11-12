<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    
    public function index()
    {
        $response = Http::get('localhost:8000/api/producto');
        $productos = json_decode($response, true);
        return view('Productos/ListadoProductos',['productos' => $productos]);
   

    }
}
