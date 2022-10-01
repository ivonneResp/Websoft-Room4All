@extends('layouts.app')
@section('content')



<!-- Contenido -->
<section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">

                <a href="/post" name="nickname" class="mx-3 pb-3 btn btn-outline-success d-block d-md-inline fw-bolder fst-italic fs-6 {{isset($categoryIdSelected)? '': 'selected-category'}} " >Todas</a>
                    @foreach($categories as $category)
                    <a href="{{route('posts.category', $category->titulo)}}" name="nickname" class=" mx-3 pb-3 btn btn-outline-success d-block d-md-inline fw-bolder fst-italic fs-6 {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category': '' }}" >{{$category->titulo}}</a>
                    @endforeach
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    @foreach ($posts as $post)

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->titulo}}">
                            <div class="card-body">
                                <small class="card-txt-category"><b>Municipio:</b> {{$post->category->titulo}}</small>
                                <!--<h5 class="card-title my-2">Aprende Python en un dos tres</h5>-->
                                
                                <div class="d-card-text"><b> Titulo:</b>
                                    {{$post->encabezado}}
                                </div>
                                
                                <div class="d-card-text"><b> Descripcion:</b>
                                    {{$post->descripcion}}
                                </div>
                                <div class="d-card-text"><b>precio:</b>
                                    {{$post->precio}}
                                </div>
                                <div class="d-card-text"><b>Ubicacion:</b>
                                    {{$post->ubicacion}}
                                </div>
                                <!--<a href="#" class="post-link"><b>Leer más</b></a>-->
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"></span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">{{$post->created_at->diffForHumans()}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>

@endsection