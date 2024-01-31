<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webs;

class FormularioController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function generarPagina(Request $request)
    {
        $request->validate([
            'colorPrincipal' => 'required|string',
            'colorSecundario' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Puedes ajustar según tus necesidades
            'productos' => 'required|string',
        ]);

        $id = auth()->user()->id;
        $colorPrincipal = $request->input('colorPrincipal');
        $colorSecundario = $request->input('colorSecundario');
        $productos = $request->input('productos');
        $logo = $request->file('logo')->store('logos', 'public');


        // Crear una instancia del modelo Web y asignar los valores
        $web = new webs();
        $web->client_id=$id;
        $web->color_principal = $colorPrincipal;
        $web->color_secundario = $colorSecundario;
        $web->productos = $productos;
        $web->logo_path = $logo;
        $web->save(); // Guardar en la base de datos

        $productos = explode(", ", $productos);

        return view('pagina_web',
            compact('colorPrincipal', 'colorSecundario', 'logo', 'productos'));
    }
}
