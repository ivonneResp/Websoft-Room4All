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

                    {{ __('ADMINISTRADOR') }}
                </div>
            </div>
            <div>
            <a name="nickname" class="nav-link" href="/admin/posts">Presiona para crear tu Post</a>
        </div>
    </div>
</div>
@endsection
