@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Usuario</h1>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
