<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController
{
    /**
     * Mostrar el formulario de contacto.
     */
    public function create()
    {
        return view('contacto');
    }

    /**
     * Procesar el formulario de contacto.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'mensaje' => 'required|string|max:500',
        ]);

        return view('contacto', [
            'enviado' => true,
            'nombre' => $datos['nombre'],
        ]);
    }
}