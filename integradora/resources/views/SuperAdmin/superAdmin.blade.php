@extends('adminlte::page')


@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    {{ __('Super Administrador') }}
                </div>
                <div>
            <a name="nickname" class="nav-link" href="/superAdmin/categories">Presiona para crear o editar un municipio</a>
            <a name="nickname" class="nav-link" href="/superAdmin/posts">Presiona para eliminar un post</a>
        </div>
            </div>
    </div>
</div>
@endsection