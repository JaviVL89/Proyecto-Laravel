{{-- Dentro de resources/views/eventos/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $evento->nombre }}</h1>
    <p>{{ $evento->descripcion }}</p>
    <p>Fecha del evento: {{ $evento->fecha }}</p>

    {{-- Botón para mostrar comentarios relacionados --}}
    <a href="{{ route('eventos.comentarios', $evento->id) }}" class="btn btn-info">Ver Comentarios</a>

    
</div>
@endsection
