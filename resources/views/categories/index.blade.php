@extends('layouts.app')
@section('content')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">

<h2 class="text-white">Lista de Categorias</h2>
<div class="d-flex justify-content-end">
    <a href="{{ route('categories.create') }}" class="btn mb-2"><img src="https://img.icons8.com/flat_round/2x/plus.png" width="30px" height="30px"></a>
</div>
<ul class="list-group">
    @foreach($categories as $category)
    <li class="list-group-item text-uppercase">
        <span>{{$category->name}}</span>
        <span>({{$category->products()->count()}})</span>
        @if(!$category->trashed())
            <a href="#" class="btn float-right ml-1"><img src="https://image.flaticon.com/icons/svg/2937/2937943.svg" width="25px" height="25px"></a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn float-right ml-1"><img src="https://img.icons8.com/dotty/2x/edit.png" width="25px" height="25px"></a>
        @else
            <form action="{{ route('restore-categories.update', $category->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Certeza? :)')">
                @csrf
                @method('PUT')
                <button type="submit" href="#" class="btn btn-sm float-right ml-1">Reativar</button>
            </form>
        @endif
        <form action="{{ route('categories.destroy', $category->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que deseja apagar? :c')">
            @csrf
            @method('DELETE')
            <button type="submit" href="#" class="btn float-right"> <img src="https://img.icons8.com/dotty/2x/full-trash.png" width="25px" height="25px">{{ $category->trashed() ? 'Remover' : '' }}</a>
        </form>
    </li>
    @endforeach
</ul>

@endsection
