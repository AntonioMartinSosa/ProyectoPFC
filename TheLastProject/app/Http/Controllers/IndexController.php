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
        $mensaje = new Mensaje();
        $mensaje->nombre = $request->input('nombre');
        $mensaje->email = $request->input('email');
        $mensaje->telefono = $request->input('telefono');
        $mensaje->mensaje = $request->input('mensaje');
        $mensaje->save();

        return view('index');
    }
}
