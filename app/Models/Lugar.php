<?php

namespace App\Models;

class Lugar
{
    /**
     * Obtener todos los lugares turísticos.
     */
    public static function all(): array
    {
        $ruta = storage_path('app/data/lugares.json');

        $contenido = file_get_contents($ruta);

        return json_decode($contenido, true) ?? [];
    }

    /**
     * Obtener un lugar específico por su ID.
     */
    public static function find(int $id): ?array
    {
        $lugares = self::all();

        foreach ($lugares as $lugar) {
            if ($lugar['id'] === $id) {
                return $lugar;
            }
        }

        return null;
    }
}