<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
use App\Models\Categorias;

class HomeController extends Controller
{
    public function index()
    {
        // mostrar noticia x categorias
        $news = Articulos::where('category_id', 1)->get();
        $sports = Articulos::where('category_id', 2)->get();
        $economy = Articulos::where('category_id', 3)->get();

        // mostrar noticias destacadas
        $featured = Articulos::where('is_featured', 1)->get();

        return view('home', compact('news', 'sports', 'economy', 'featured'));
    }

    public function show(Request $request)
    {
        $post = Articulos::where('id', $request->id)->first();
        return view('show', compact('post'));
    }
}