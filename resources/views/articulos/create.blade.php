@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5">
                <h1 class="display-5 fw-bold">Crear artículo</h1>
                <p class="fs-5">Completa el siguiente formulario para crear un nuevo artículo.</p>
                <form action="{{ route('articulos.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Título</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Ej.: Un titular que llame la atención">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label fw-bold">Categoría</label>
                        <select class="form-select" id="category_id" name="category_id">
                            <option value="">Selecciona una categoría...</option>
                            <option value="1">Noticias</option>
                            <option value="2">Deportes</option>
                            <option value="3">Economía</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Imagen</label>
                        <input type="text" class="form-control" id="image" name="image" placeholder="https://">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label fw-bold">Contenido</label>
                        <textarea class="form-control" id="content" name="content" rows="6"
                            placeholder="Aquí debes añadir el texto de la noticia..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="is_featured" class="form-label fw-bold">Destacado</label>
                        <select class="form-select" id="is_featured" name="is_featured">
                            <option value="">¿Deseas destacar este artículo?</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Guardar artículo">
                </form>
            </div>
        </div>
    </div>
@endsection
