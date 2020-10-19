<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    //
    public function ver($id)
    {
        return view('facturas.ver', ['cod_cliente' => $id]);
    }
}
