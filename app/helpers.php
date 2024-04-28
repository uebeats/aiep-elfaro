<?php

use App\Models\Categorias;

if (!function_exists('getNameCategory')) {

    function getNameCategory($id)
    {
        $category = Categorias::find($id);
        return $category->nombre;
    }
}