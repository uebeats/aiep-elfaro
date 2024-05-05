@extends('layouts.site')

@section('content')
    <div class="container">
        @auth
            @if(Auth::user()->role == 'admin')
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12">
                    <h1 class="display-5 fw-bold">Lista de contactos</h1>
                    <p class="fs-5">
                        A continuación, se muestra la lista de contactos registrados en el sistema.
                    </p>
                    <ul>
                        @foreach ($contactos as $contacto)
                            <li><b>Nombre:</b> {{ $contacto->nombre }} / <b>Mensaje:</b> {{ $contacto->mensaje }} / Leido: @if ($contacto->status == true) Si @else No @endif</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger">
                        No tienes permisos para acceder a esta sección.
                    </div>
                </div>
            </div>
            @endif
        @endauth
    </div>
@endsection
