<?php

use App\Models\Categorias;
use App\Models\Articulos;

if (!function_exists('getNameCategory')) {

    function getNameCategory($id)
    {
        $category = Categorias::find($id);
        return $category->nombre;
    }
}

// obtener noticias a partir de categorias
if (!function_exists('getNewsByCategory')) {

    function getNewsByCategory($category_id, $id_article)
    {
        return Articulos::where('category_id', $category_id)->where('id', '!=', $id_article)->limit(3)->get();
    }
}
