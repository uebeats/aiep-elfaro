@extends('layouts.site')
@section('content')
    <section class="container publicidad">
        <div class="row pb-5">
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                @auth
                <h1 class="display-5 fw-bold">{{ $post->title }}</h1>
                <p class="badge bg-primary">{{ getNameCategory($post->category_id) }}</p>
                <img src="{{ $post->image }}" alt="" class="img-fluid mb-4">
                <p class="fs-5">{{ $post->content }}</p>
                @else
                <div class="alert alert-info">
                    <p class="fs-5 m-0">Para ver el contenido de esta noticia, por favor <a href="{{ route('login') }}">inicia sesión</a>.</p>
                </div>
                @endauth
            </div>
        </div>
    </div>
    @auth
    <div id="destacados" class="container">
        <div class="row pt-3 pb-1">
            <div class="col">
                <h2>Noticias relacionadas</h2>
            </div>
        </div>
        <div class="row">
            @foreach (getNewsByCategory($post->category_id, $post->id) as $post)
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
    @endauth
@endsection
