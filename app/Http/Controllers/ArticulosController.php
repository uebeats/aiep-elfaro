<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'is_featured' => 'required',
        ]);

        $articulo = new Articulos();
        $articulo->title = $request->title;
        $articulo->content = $request->content;
        $articulo->image = $request->image;
        $articulo->category_id = $request->category_id;
        $articulo->is_featured = $request->is_featured;
        $articulo->save();

        return redirect()->route('articulos.create')->with('success', 'Articulo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulos $articulos)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulos $articulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articulos $articulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulos $articulos)
    {
        //
    }
}
