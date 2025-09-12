@extends('layouts.app')
@section('title', 'Inicio')


@section('content')
<div class="row">
    <div class="col-12 col-md-8">
        <h1 class="mb-4">Bienvenido a la Biblioteca</h1>
        <p class="lead">aaaaa</p>
    </div>
    <div class="col-12 col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Acciones rápidas</h5>
                <a href="{{ url('/libros') }}" class="btn btn-primary btn-sm mb-2 w-100">Ver Libros</a>
                <a href="{{ url('/usuarios') }}" class="btn btn-secondary btn-sm mb-2 w-100">Ver Usuarios</a>
                <a href="{{ url('/prestamos') }}" class="btn btn-success btn-sm w-100">Préstamos</a>
            </div>
        </div>
    </div>
</div>
@endsection
