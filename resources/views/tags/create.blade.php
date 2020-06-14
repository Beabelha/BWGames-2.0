@extends('layouts.app')
@section('content')
<h2>Cria Tag</h2>
<form action="{{ route('tags.store') }}" class="bg-white p-3" method="POST">
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
        <input type="text" class="form-control" name="name" placeholder="Digite o nome da tag" value="{{ old('name') }}">
    </div>
    <button type="submit" class="btn btn-success">Criar Tag</button>
</form>
@endsection