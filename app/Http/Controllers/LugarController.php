<?php

namespace App\Http\Controllers;

use App\Models\Lugar;

class LugarController
{
    /**
     * Mostrar todos los lugares turísticos.
     */
    public function index()
    {
        $lugares = Lugar::all();

        return view('lugares.index', compact('lugares'));
    }

    /**
     * Mostrar un lugar específico.
     */
    public function show($id)
    {
        $lugar = Lugar::find((int) $id);

        if (!$lugar) {
            abort(404);
        }

        return view('lugares.show', compact('lugar'));
    }
}