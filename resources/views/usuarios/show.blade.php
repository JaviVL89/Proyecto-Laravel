@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <ul class="list-group">
        <li class="list-group-item">Nombre: {{ $user->name }}</li>
        <li class="list-group-item">Email: {{ $user->email }}</li>
    </ul>
</div>
@endsection
