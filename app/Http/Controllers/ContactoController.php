<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'mensaje' => 'required',
        ]);

        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect()->route('home')->with('success', 'Articulo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
