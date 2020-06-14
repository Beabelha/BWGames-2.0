@extends('layouts.app')
@section('content')

<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">

<h2 class="text-white">Meus Jogos</h2>
<div class="d-flex justify-content-end">
    <a href="{{ route('products.create') }}" class="btn mb-2"><img src="https://img.icons8.com/flat_round/2x/plus.png" width="30px" height="30px"></a>
</div>
<ul class="list-group">
    @foreach($products as $product)
    @if($product->user_id === auth()->user()->id)
    <li class="list-group-item">
        <img src="{{ asset('storage/'.$product->image) }}" width="40" height="40">
        <span>{{$product->name}}</span>
        @if(!$product->trashed())
            <a href="{{ route('show-product', $product->id) }}" class="btn float-right ml-1"><img src="https://image.flaticon.com/icons/svg/2937/2937943.svg" width="25px" height="25px"> </a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn float-right ml-1"><img src="https://img.icons8.com/dotty/2x/edit.png" width="25px" height="25px"></a>
        @else
            <form action="{{ route('restore-product.update', $product->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer reativar?')">
                @csrf
                @method('PUT')
                <button type="submit" href="#" class="btn float-right ml-1">Reativar</button>
            </form>
        @endif
        <form action="{{ route('products.destroy', $product->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que deseja apagar? :(')">
            @csrf
            @method('DELETE')
            <button type="submit" href="#" class="btn float-right"> <img src="https://img.icons8.com/dotty/2x/full-trash.png" width="25px" height="25px">{{ $product->trashed() ? 'Remover' : '' }}</button>
        </form>
    </li>
    @endif
    @endforeach
</ul>
@endsection
