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
        $validatedData = $request->validate([
            'colorPrincipal' => 'required',
            'colorSecundario' => 'required',
            'logo' => 'required|image',
            'nombresProductos.*' => 'required',
            'fotosProductos.*' => 'required|image',
        ]);

        $id = auth()->user()->id;
        $empresa = auth()->user()->nombre_empresa;
        $colorPrincipal = $request->input('colorPrincipal');
        $colorSecundario = $request->input('colorSecundario');
        $logo = $request->file('logo')->store('logos', 'public');
        $productos = [];
        foreach ($request->nombresProductos as $key => $nombreProducto) {
            $fotoProductoPath = $request->file('fotosProductos')[$key]->store('productos', 'public');
            $descripcionProducto = $request->descripcionProductos[$key];
            $precioProducto = $request->precioProductos[$key];
            $productos[] = [
                'nombre' => $nombreProducto,
                'foto' => $fotoProductoPath,
                'descripcion' => $descripcionProducto,
                'precio' => $precioProducto
            ];
        }

        $nombreProductos = implode(', ', array_column($productos, 'nombre'));
        $web = new webs();
        $web->client_id = $id;
        $web->color_principal = $colorPrincipal;
        $web->color_secundario = $colorSecundario;
        $web->productos = $nombreProductos;
        $web->logo_path = $logo;
        $web->save();

        return view('pagina_web', compact('empresa', 'colorPrincipal', 'colorSecundario', 'logo', 'productos'));
    }
}
