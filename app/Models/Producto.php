<?php

namespace App\Models;

class Producto
{
    private static array $products = [
        [
            'id' => 1,
            'nombre' => 'Ulibroback Vintage Edition',
            'precio' => 25.99,
            'descripcion' => 'A classic pre-loved book in excelente condition.'
        ],
        [
            'id' => 2,
            'nombre' => 'Ulibroback Subscription Pass',
            'precio' => 12.00,
            'descripcion' => 'Monthly pass for trading and swapping books.'
        ],
    ];

    public static function all(): array
    {
        return self::$products;
    }
}
