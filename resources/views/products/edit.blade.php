@extends('layouts.app')
@section('content')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">

<h2 class="text-white">Editar - {{$product -> name}}</h2>

<form action="{{ route('products.update', $product->id) }}" class="bg-white p-3" method="POST" enctype="multipart/form-data">
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
        <input type="text" class="form-control" name="name" placeholder="Digite o nome do produto" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea class="form-control" name="description" placeholder="Digite a descrição do produto">{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="category">Categoria:</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>
                {{$category->name}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="name">Imagem:</label>
        <input type="file" class="form-control-file" name="image">
    </div>
    <div class="form-group">
        <label for="video">Link de vídeo do Youtube:</label>
        <input type="text" class="form-control" name="video" placeholder="Vídeo do jogo" value="{{ $product->video }}">
    </div>
    <div class="form-group">
        <label for="link">Link:</label>
        <input type="text" class="form-control" name="link" placeholder="Link do jogo" value="{{ $product->link }}">
    </div>

    <button type="submit" class="btn btn-success">Salvar produto</button>
</form>
@endsection
