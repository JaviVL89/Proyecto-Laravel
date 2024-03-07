@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Usuario</h1>
    <form method="POST" action="{{ route('usuarios.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Nueva Contraseña (opcional):</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-success">Actualizar Usuario</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
   
