@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Encabezado que muestra el nombre del evento -->
    <h2>Comentarios para el evento: {{ $evento->nombre }}</h2>

    <!-- Verifica si hay comentarios para este evento -->
    @if($evento->comentarios->isEmpty())
        <p>No hay comentarios para este evento.</p>
    @else
        <!-- Muestra la lista de comentarios si existen -->
        <ul class="list-group">
            @foreach($evento->comentarios as $comentario)
                <li class="list-group-item">{{ $comentario->contenido }}</li>
            @endforeach
        </ul>
    @endif

    <!-- Enlace para volver al detalle del evento -->
    <a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-secondary mt-3">Volver al Evento</a>
</div>
@endsection
