@extends('layouts.app')

@section('content')
<h1>Detalle de Usuario</h1>

<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
        <p><strong>Creado:</strong> {{ $usuario->created_at }}</p>
    </div>
</div>

<a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning mt-3">Editar</a>
<a href="{{ route('usuarios.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection