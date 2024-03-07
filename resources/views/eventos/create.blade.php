{{-- resources/views/eventos/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear evento</h1>
    <form action="{{ route('eventos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del evento:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha del evento:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar evento</button>
    </form>
</div>
@endsection
