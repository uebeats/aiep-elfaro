@extends('layouts.site')

@section('content')
    <section class="container publicidad">
        <div class="row">
            <div class="col">
                <h6 class="mt-2">Publicidad/Ads</h6>
                <div class="card">
                    <p class="text-ads mb-0">
                        Para publicitar en nuestro sitio web, por favor contacta a nuestro equipo de ventas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center container portada"
        style="background-image: url('{{ asset('/images/dot-grid.webp') }}'); background-repeat: repeat;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <h1 class="fw-bold">
                    ¡Tu nueva brújula informativa!
                </h1>
                <p class="lead text-body-secondary">En un océano de datos y noticias, nuestro compromiso es guiarte
                    hacia la verdad con reportajes profundos, análisis objetivos y una cobertura confiable y
                    actualizada. Navega con nosotros y mantente informado sobre los eventos más importantes, tanto
                    locales como globales. <br> ¡Con <strong>El Faro</strong>, iluminamos el camino hacia la
                    información que importa!
                </p>
                <div class="show-hora d-flex flex-row gap-1 justify-content-center">
                    <div id="DiaSemana"></div>
                    <div id="Dia"></div>
                    <div id="Mes"></div>
                    <div id="Year"></div>
                    -
                    <div id="Horas"></div>:
                    <div id="Minutos"></div>:
                    <div id="Segundos"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div id="destacados" class="container">
            <div class="row pt-3 pb-1">
                <div class="col">
                    <h2>Destacados</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($featured as $post)
                    <div class="col-lg-6 col-12">
                        <a href="{{ route('post.show', $post->id) }}">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="tag-categoria">
                                            <span class="badge bg-danger">
                                                {{ getNameCategory($post->category_id) }}
                                            </span>
                                        </div>
                                        <img src="{{ $post->image }}" class="img-fluid rounded-start"
                                            alt="{{ $post->title }}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p class="card-text">{{ $post->content }}</p>
                                            <p class="card-text">
                                                <small class="text-body-secondary">
                                                    Actualizado por ultima vez hace 3 minutos
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row pt-5 pb-1">
                <div class="col">
                    <h2>Noticias</h2>
                </div>
            </div>
            <div id="noticias" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($news as $post)
                    <a href="{{ route('post.show', $post->id) }}">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="tag-categoria">
                                    <span class="badge bg-primary">
                                        {{ getNameCategory($post->category_id) }}
                                    </span>
                                </div>
                                <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <button class="btn btn-sm btn-outline-secondary ver-noticia"
                                        data-id="{{ $post->id }}">Ver
                                        Noticia</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="row pt-5 pb-1">
                <div class="col">
                    <h2>Deportes</h2>
                </div>
            </div>
            <div id="deportes" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($sports as $post)
                    <a href="{{ route('post.show', $post->id) }}">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="tag-categoria">
                                    <span class="badge bg-primary">
                                        {{ getNameCategory($post->category_id) }}
                                    </span>
                                </div>
                                <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <button class="btn btn-sm btn-outline-secondary ver-noticia"
                                        data-id="{{ $post->id }}">Ver
                                        Noticia</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="row pt-5 pb-1">
                <div class="col">
                    <h2>Negocios</h2>
                </div>
            </div>
            <div id="economia" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($economy as $post)
                    <a href="{{ route('post.show', $post->id) }}">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="tag-categoria">
                                    <span class="badge bg-primary">
                                        {{ getNameCategory($post->category_id) }}
                                    </span>
                                </div>
                                <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <button class="btn btn-sm btn-outline-secondary ver-noticia"
                                        data-id="{{ $post->id }}">Ver
                                        Noticia</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <section class="container publicidad">
        <div class="row pt-4">
            <div class="col">
                <h6 class="mt-2">Publicidad/Ads</h6>
                <div class="card">
                    <p class="text-ads mb-0">
                        Para publicitar en nuestro sitio web, por favor contacta a nuestro equipo de ventas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center py-5">
            <div class="col-lg-4 col-12">
                <h2>Formulario de Contacto</h2>
                <form action="{{ route('contacto.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
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
    </section>

    <!-- Modal para agregar noticias -->
    <div class="modal fade" id="addNewsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Noticia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="categoriaNoticia" class="form-label">Categorias</label>
                            <select name="categoriaNoticia" id="categoriaNoticia" class="form-select" required>
                                <option value="noticias">Noticias</option>
                                <option value="deportes">Deportes</option>
                                <option value="negocios">Negocios</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="titularNoticia" class="form-label">Titular o nombre Noticia</label>
                            <input type="text" name="titularNoticia" id="titularNoticia" class="form-control"
                                placeholder="Aquí debes colocar el titular">
                        </div>
                        <div class="mb-3">
                            <label for="imagenNoticia" class="form-label">URL imagen de Noticia</label>
                            <input type="text" name="imagenNoticia" id="imagenNoticia" class="form-control"
                                placeholder="https://">
                        </div>
                        <div class="mb-3">
                            <label for="cuerpoNoticia" class="form-label">Cuerpo de la Noticia</label>
                            <textarea name="cuerpoNoticia" id="cuerpoNoticia" cols="30" rows="5" class="form-control"
                                placeholder="Aquí debes colocar el cuerpo de la noticia..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="buttonAddNews">Crear Noticia</button>
                </div>
            </div>
        </div>
    </div>
@endsection
