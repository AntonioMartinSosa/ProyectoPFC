<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function guardarMensaje(Request $request)
    {
        // Lógica para guardar el mensaje aquí
        $clienteId = $request->input('cliente_id');

        $mensaje = new Mensaje();
        $mensaje->cliente_id = $clienteId;
        $mensaje->nombre = $request->input('nombre');
        $mensaje->email = $request->input('email');
        $mensaje->telefono = $request->input('telefono');
        $mensaje->mensaje = $request->input('mensaje');
        $mensaje->save();

        return view('index');
    }
}
