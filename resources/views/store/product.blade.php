@extends('layouts.store')

@section('content')

<link href="{{ asset('css/produtos.css') }}" rel="stylesheet">

<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-uppercase" aria-current="page"><a href="{{ route('serach-category', $product->category->id) }}">{{$product->category->name}}</a></li>
            <li class="breadcrumb-item active text-uppercase" aria-current="page">{{$product->name}}</li>
        </ol>
      </nav>
</section>

<section class="container py-4">
    <div class="row">
        <div class="col-4 mx-auto text-center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                     <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid">
              </div>

              <div class="carousel-item">
                    <iframe class="img-fluid" style="border: none; width: 100%; height: 170px;" src="{{$product->video}}"></iframe>

              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="mx-auto col-8 text-center">
            <h2 class="text-uppercase">{{ $product->name }}</h2>
            <p class="text">{{ $product->description }}</p>
            <span class="text-muted text-monospace">Desenvolvedor(a): {{$product->user->name}}</span> |
            <span class="text"><a class="a" href="https://{{$product->user->github}}" target="blank"><strong >Github<strong></a></span>
            <div class="text-center mt-3">
                <a target="blank" href="{{$product->link}}" class="btn text-white">Download/Página do jogo</a>
            </div>
        </div>
    </div>

</section>

@endsection

