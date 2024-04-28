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
                <h1 class="display-5 fw-bold">{{ $post->title }}</h1>
                <p class="badge bg-primary">{{ getNameCategory($post->category_id) }}</p>
                <img src="{{ $post->image }}" alt="" class="img-fluid mb-4">
                <p class="fs-5">{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection
