@extends('layouts.app')
@section('content')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">

<h2 class="text-white">Editar Categorias</h2>
<form action="{{ route('categories.update', $category->id) }}" class="bg-white p-3" method="POST">
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
        <input type="text" class="form-control" name="name" placeholder="Digite o nome da categoria" value="{{ $category->name }}">
    </div>
    <button type="submit" class="btn btn-success">Editar categoria</button>
</form>
@endsection