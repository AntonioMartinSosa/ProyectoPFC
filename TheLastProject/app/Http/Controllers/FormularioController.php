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

        // Crear una instancia del modelo Web y asignar los valores
        $web = new webs();
        $web->client_id = auth()->user()->id;
        $web->color_principal = $request->input('colorPrincipal');
        $web->color_secundario = $request->input('colorSecundario');
        $web->productos = $request->input('productos');

        // Guardar el logo si se proporcionó
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $web->logo_path = $logoPath;
        }

        $web->save(); // Guardar en la base de datos

        $colorPrincipal = $request->input('colorPrincipal');
        $colorSecundario = $request->input('colorSecundario');
        $logo = $request->file('logo');
        $productos = $request->input('productos');
        $productos_formateados = explode(", ", $productos);

        return view('pagina_web',
            compact('colorPrincipal', 'colorSecundario', 'logo', 'productos_formateados'));
    }
}
