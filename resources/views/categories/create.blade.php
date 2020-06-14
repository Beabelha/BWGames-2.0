@extends('layouts.app')
@section('content')
<h2 class="text-white">Criar Categoria</h2>

<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
<link href="{{ asset('css/produtos.css') }}" rel="stylesheet">

<form action="{{ route('categories.store') }}" class=" p-3" method="POST">
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
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="name" placeholder="Digite o nome da categoria" value="{{ old('name') }}">
    </div>
    <button type="submit" class="btn salvarForm">Criar categoria</button>
</form>
@endsection