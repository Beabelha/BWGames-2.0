@extends('layouts.app')
@section('content')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
<link href="{{ asset('css/produtos.css') }}" rel="stylesheet">

<h2 class="text-white">Editar Perfil</h2>
<form action="{{ route('users.update-profile', $user->id) }}" class="p-3" method="POST">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome:</label>
        <input  type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ $user->name }}"z>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="github">Github:</label>
        <input type="text" class="form-control" name="github" placeholder="Link do github" value="{{ $user->github }}">
    </div>
    <div class="form-group">
        <label for="name">Senha:</label>
        <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
    </div>
    <button type="submit" class="btn salvarForm">Salvar</button>
</form>
@endsection
