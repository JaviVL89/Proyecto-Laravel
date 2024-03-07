{{-- resources/views/eventos/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eventos</h1>
    <a href="{{ route('eventos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Evento</a>
    <div class="list-group">
        @foreach ($eventos as $evento)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $evento->nombre }}
                    <small>{{ \Carbon\Carbon::parse($evento->fecha)->format('d/m/Y') }}</small>
                </div>

                <div class="btn-group" role="group">
                    <a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    <!-- Botón de Eliminar -->
                    <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar este evento?')">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
