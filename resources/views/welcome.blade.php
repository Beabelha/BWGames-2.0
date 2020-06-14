@extends('layouts.store')
@section('css')
<style>
  footer{
  background-color: rgb(19, 5, 27);
  font-size: 13px;
  }
  #carouselExampleIndicators .carousel-item .d-block {
    height: 480px;
    border-radius: 15px;
  }

  .carousel-inner {
    min-height: 400px;
    background-position: center;
    background-size: cover;
    color: white;
    background-repeat: no-repeat;
  }

  .row {
    color: white;
    font-family: 'Cinzel', serif;
  }

  .jogo-btn {
    background-color: rgb(16, 0, 26);
    color: #d5d6ee;
    font-size: 16px;
    width: 250px;
  }

  .jogo-btn:hover {
    color: white;
  }

  .img-fluid {
    width: 250px;
    height: 150px;
  }
</style>
@endsection

<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100"
        src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/d53a6c94835093.5e88ae4849b8b.png" alt="First slide">

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.centralxbox.com.br/wp-content/uploads/2019/04/For-the-King.jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://nyc3.digitaloceanspaces.com/gamersegames/2020/05/Minecraft-Dungeons.jpg"
        alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"
        src="https://livewallpaper.info/wp-content/uploads/2017/08/Kingsglaive-Final-Fantasy-XV-wallpaper-wp8008900.jpg"
        alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"
        src="https://www.ps4wallpapers.com/wp-content/uploads/2017/09/PS4Wallpapers.com_59cac446c524a_LEL-1056x594.jpeg"
        alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>
<section class="container py-4">
  <div class="row">
    <div class="mx-auto col-10 text-center">
      <h2 class="text-uppercase">Jogos recentes</h2>
      <hr style="background: rgb(19, 5, 27);">
    </div>
  </div>

  <div class="row">
    @foreach($products as $product)
    <div class="mx-auto col-sm-10 col-md-6 col-lg-3" style="margin-bottom: 8px;">
      <div class="text-center mt-3">
        <a href="{{ route('show-product', $product->id) }}" class="btn btn-sm jogo-btn"> <img
            src="{{ asset('storage/'. $product->image) }}" class="img-fluid">
          <span class="d-block h6 text-center text-uppercase mt-3">{{ $product->name}}</span>
        </a>
      </div>

    </div>
    <br>
    @endforeach

  </div>
  <br>
  <div class="d-flex justify-content-center">
    {{ $products -> links() }}
  </div>
</section>
<hr>

<!-- Titulo da sessão de categorias --> 
<h2 class="text-white text-center"> Jogos selecionados por categoria </h2>
<p class="text-white text-center font-weight-light"> Clique na imagem para ser redirecionado ao jogo </p>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm">

      <div id="carouselExampleControls3" style="width: 320px; height: 200px;" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          
          <!-- Titulo da categoria --> 
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://meepledivino.blog.br/wp-content/uploads/2016/12/Dice-d20-wallpaper.jpg" style="width: 320px; height: 200px;">

            <div class="carousel-caption d-none d-md-block" style="background-color: rgb(16, 0, 26); border-radius: 5px">
              <h5>RPG</h5>
            </div>   
                 </div>

          <!-- Produtos da categoria -->       
          @foreach($products as $product)
               @if($product->category_id === 11)

          <div class="carousel-item">
            <a href="{{ route('show-product', $product->id) }}">
                <img class="d-block w-100" src="{{ asset('storage/'. $product->image) }}" style="width: 320px; height: 200px;">
            </a>
          </div>  
             
          @endif
          @endforeach
        </div>


        <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

    <div class="col-sm">

      <div id="carouselExampleControls1" style="width: 320px; height: 200px;" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          
          <!-- Titulo da categoria --> 
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://wallpaperplay.com/walls/full/8/c/9/164839.jpg" style="width: 320px; height: 200px;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgb(16, 0, 26); border-radius: 5px">
              <h5>Ação e aventura</h5>
            </div>   
          </div>

          <!-- Produtos da categoria -->       
          @foreach($products as $product)
               @if($product->category_id === 2)

          <div class="carousel-item">
            <a href="{{ route('show-product', $product->id) }}">
                <img class="d-block w-100" src="{{ asset('storage/'. $product->image) }}" style="width: 320px; height: 200px;">
            </a>
          </div>  
             
          @endif
          @endforeach
        </div>


        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <div class="col-sm">
      
      <div id="carouselExampleControls2" style="width: 320px; height: 200px;" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <!-- Titulo da categoria --> 
          <!-- Titulo da categoria --> 
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://cdn.gamer-network.net/2017/screenshots/ki.jpg" style="width: 320px; height: 200px;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgb(16, 0, 26); border-radius: 5px;">
              <h5>LUTA</h5>
            </div>   
          </div>

          <!-- Produtos da categoria -->       
          @foreach($products as $product)
               @if($product->category_id === 7)

          <div class="carousel-item">
            <a href="{{ route('show-product', $product->id) }}">
                <img class="d-block w-100" src="{{ asset('storage/'. $product->image) }}" style="width: 320px; height: 200px;">
            </a>
          </div>  
             
          @endif
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>
</div>
<br>

<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <br>
        <h5 class="text-uppercase">Um pouco sobre nós</h5>
        <p>Somos estudantes do curso de tecnologia em sistemas para internet! :) <br>
            Ao lado você vai encontar nossas redes sociais
        </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Beabelha</h5>

        <ul class="list-unstyled">
          <li>
            <a class="text-white text-decoration-none" target="blank" href="https://www.instagram.com/beabelha/">Instagram</a>
          </li>
          <li>
            <a class="text-white text-decoration-none" target="blank" href="https://www.facebook.com/profile.php?id=100001968072304">Facebook</a>
          </li>
          <li>
            <a class="text-white text-decoration-none" target="blank" href="#!">Steam</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Bulgrat</h5>

        <ul class="list-unstyled">
          <li>
            <a class="text-white text-decoration-none " target="blank" href="#!">Instagram</a>
          </li>
          <li>
            <a class="text-white text-decoration-none" target="blank" href="#!">facebook</a>
          </li>
          <li>
            <a class="text-white text-decoration-none" target="blank" href="#!">Steam</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
<HR>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    BWGAMES
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

@endsection


