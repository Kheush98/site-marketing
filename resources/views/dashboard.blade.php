@extends('layouts.main')
@section('name', 'Home')
@section('header')
<ul>
    <li class="menu_iconb">
        <a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" />783852314</a>
    </li>
    <li class="menu_iconb">
        <a href="{{route('logout')}}">Deconnexion <img style="margin-right: 15px;" src="icon/5.png" alt="#" /> </a>
    </li>
    <li class="tytyu">
        <a href="#"> <img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a>
    </li>
    <li class="menu_iconb">
        <a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a>
    </li>

    <li>
        <button type="button" id="sidebarCollapse">
            <img src="images/menu_icon.png" alt="#" />
        </button>
    </li>
</ul>
@endsection

@section('banner')
<section class="slider_section">
    <div class="banner_main">
        <div class="container-fluid padding3">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mapimg">
                    <div class="text-bg">
                        <h1>Bienvenue <br>
                    Dans<br>
                    eMarket<br>
                    Pro</h1>
                        {{-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span> --}}
                        <a href="#">Contacter-nous</a> 
                    </div>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="images/cap.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/cap.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/cap.png" alt="Third slide">
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
        </div>
    </div>
</section>
@endsection