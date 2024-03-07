{{-- resources/views/eventos/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar evento</h1>
    <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del evento:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $evento->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $evento->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha del Evento:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $evento->fecha->toDateString() }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar evento</button>
    </form>
</div>
@endsection
