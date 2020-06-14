@extends('layouts.store')
@section('content')
<link href="{{ asset('css/produtos.css') }}" rel="stylesheet">

<section class="container py-4">
    <div class="row">
        <div class="mx-auto col-10 text-center">
            <h2 class="text-uppercase text-white">{{ $title }}</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="mx-auto col-sm-10 col-md-6 col-lg-3">

                     <div class="text-center mt-3">
                    <a href="{{ route('show-product', $product->id) }}" class="btn btn-sm"><img src="{{ asset('storage/'.$product->image) }}" class="img-fluid">
                        <span class="d-block h6 text-center text-uppercase mt-3">{{ $product->name }}</span></a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</section>
@endsection
