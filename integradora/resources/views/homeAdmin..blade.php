@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! USER') }}
                </div>
            </div>
            <a name="nickname" class="nav-link" href="/admin/categories">Presiona para agregar un titulo de post </a>
        </div>
    </div>
</div>
@endsection
