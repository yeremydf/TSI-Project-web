@extends('layouts.app')

@section('title', 'Catálogo de Libros')

@section('content')
<div class="container py-4">
    <h1 class="welc mb-4 text-center" style="margin-bottom: 10px">Bienvenid@ a la Biblioteca</h1>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($libros as $libro)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden hover-scale">
                    <img src="https://covers.openlibrary.org/b/isbn/{{ $libro->isbn_libro }}-L.jpg"
                         class="card-img-top"
                         alt="{{ $libro->titulo }}"
                         onerror="this.src='/images/no_cover.png'">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-truncate" title="{{ $libro->titulo }}">{{ $libro->titulo }}</h5>
                        <p class="card-text mb-2">
                            <strong>Autor:</strong> {{ $libro->autor->nombre ?? 'Desconocido' }}<br>
                            <strong>Edición:</strong> {{ $libro->edicion ?? 'N/A' }}<br>
                            <strong>Género:</strong> {{ $libro->genero->nombre ?? 'N/A' }}
                        </p>

                        <div class="mt-auto">
                            <span class="badge bg-primary me-1">Total: {{ $libro->stock_total }}</span>
                            <span class="badge bg-success">Disponible: {{ $libro->stock_disponible }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
