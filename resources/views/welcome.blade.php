@extends('layouts.main')
@section('Titre', 'Welcome')
@section('header')
<ul>
    <li class="menu_iconb">
        <a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" />783852314</a>
    </li>
    <li class="menu_iconb">
        <a role="button" type="button" data-toggle="modal" data-target="#exampleModalCenter" href="#">Connecter <img style="margin-right: 15px;" src="icon/5.png" alt="#" /> </a>
    </li>
    <li class="menu_iconb">
        <a href="#">S'inscrire<img style="margin-left: 15px;" src="icon/6.png" alt="#" /></a>
    </li>
    {{-- <li class="tytyu">
        <a href="#"> <img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a>
    </li> --}}
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

@section('brand')
    <div id="brand"  class="brand-bg">
        <h3>Nouveaux vêtements</h3>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <h5>Vente</h5>
                    <i><img src="icon/p1.png"/>
                </i>
                    <h4>Prix <span class="nolmal">3000FCFA</span></h4>

                </div>
                <a class="buynow" href="#">Ajouter panier</a>
                <a class="buynow" href="#">Acheter</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="icon/p2.png"/></i>
                    <h4>Price $<span class="nolmal">100</span></h4>
                </div>
                <a class="buynow" href="#">Buy now</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="icon/p1.png"/></i>
                    <h4>Price $<span class="nolmal">100</span></h4>
                </div>
                <a class="buynow" href="#">Buy now</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="icon/p4.png"/></i>
                    <h4>Price $<span class="nolmal">100</span></h4>
                </div>
                <a class="buynow" href="#">Buy now</a>
            </div>
        </div>
    </div>
    <a class="seemore" href="#">Voir plus</a>
@endsection

@section('shoes')
    <div id="shoes" class="shoes-bg">
        <h3>New shoes</h3>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="shoes-box">
                    <h5>Sale</h5>
                    <i><img src="icon/s1.png"/>
                </i>
                    <h4>Price $<span class="nolmal">100</span></h4>

                </div>
                <a class="buynow" href="#">Buy now</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="shoes-box">
                    <i><img src="icon/s2.png"/></i>
                    <h4>Price $<span class="nolmal">100</span></h4>
                </div>
                <a class="buynow" href="#">Buy now</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="shoes-box">
                    <i><img src="icon/s3.png"/></i>
                    <h4>Price $<span class="nolmal">100</span></h4>
                </div>
                <a class="buynow" href="#">Buy now</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="shoes-box">
                    <i><img src="icon/s4.png"/></i>
                    <h4>Price $<span class="nolmal">100</span></h4>
                </div>
                <a class="buynow" href="#">Buy now</a>
            </div>
        </div>
    </div>
    <a class="seemore" href="#">See more</a>
@endsection

@section('bijoux')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="jewellery" class="Jewellery-bg">
                    <h3>New Jewellery</h3>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <h5>Sale</h5>
                                <i><img src="icon/j1.png"/>
                                </i>
                                <h4>Price $<span class="nolmal">100</span></h4>

                            </div>
                            <a class="buynow" href="#">Buy now</a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <i><img src="icon/j2.png"/></i>
                                <h4>Price $<span class="nolmal">100</span></h4>
                            </div>
                            <a class="buynow" href="#">Buy now</a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Jewellery-box">
                                <i><img src="icon/j3.png"/></i>
                                <h4>Price $<span class="nolmal">100</span></h4>
                            </div>
                            <a class="buynow" href="#">Buy now</a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Jewellery-box">
                                <i><img src="icon/j4.png"/></i>
                                <h4>Price $<span class="nolmal">100</span></h4>
                            </div>
                            <a class="buynow" href="#">Buy now</a>
                        </div>
                    </div>
                </div>
                <a class="seemore" href="#">See more</a>
            </div>
        </div>
    </div>
@endsection

@section('kids')
<div id="kids" class="Kids_background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="Kids-bg">
                    <h3>Kids and Babies</h3>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Kids-box">

                                <i><img src="icon/k1.png"/>
                            </i>
                                <h4>Price $<span class="nolmal">100</span></h4>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Kids-box">
                                <i><img src="icon/k1.png"/></i>
                                <h4>Price $<span class="nolmal">100</span></h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Kids-box">
                                <i><img src="icon/k1.png"/></i>
                                <h4>Price $<span class="nolmal">100</span></h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Kids-box">
                                <i><img src="icon/k1.png"/></i>
                                <h4>Price $<span class="nolmal">100</span></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Votre mail:</label>
              <input type="email" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Mot de passe:</label>
              <input type="password" class="form-control" id="message-text">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div> --}}

   
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Votre mail:</label>
                  <input type="email" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mot de passe:</label>
                  <input type="password" class="form-control" id="message-text">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>