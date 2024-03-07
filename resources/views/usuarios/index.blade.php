@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios</h1>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Nuevo Usuario</a>
    <ul class="list-group mt-3">
        @foreach($usuarios as $usuario)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $usuario->name }}
                <div>
                    <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
