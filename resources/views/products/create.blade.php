@extends('layouts.app')
@section('javascript')
    <script>
        window.onload = function() {
            $('.tags_select2').select2();
        };
    </script>
@endsection
@section('content')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
<link href="{{ asset('css/produtos.css') }}" rel="stylesheet">

<h2 class="text-white">Cadastrar jogo</h2>
<form action="{{ route('products.store') }}" class="p-3" method="POST" enctype="multipart/form-data">
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
        <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea class="form-control" name="description" placeholder="Descrição do jogo">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        <label for="category">Categoria:</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option class="text-uppercase" value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
     <div class="form-group">
        <label for="name">Imagem:</label>
        <input type="file" class="form-control-file" name="image" value="null">
    </div>
    <div class="form-group">
        <label for="video">Link de vídeo do youtube:</label>
        <input type="text" class="form-control" name="video" placeholder="Link do vídeo" value="{{ old('video') }}">
    </div>
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
        <label for="link">Link:</label>
        <input type="text" class="form-control" name="link" placeholder="Link do jogo" value="{{ old('link') }}">
    </div>
    <button type="submit" class="btn salvarForm">Cadastrar jogo</button>
</form>
@endsection
