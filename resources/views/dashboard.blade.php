@extends('layouts.main')
@section('name', 'Home')
@section('header')
<ul>
    <li class="menu_iconb">
        <a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" />783852314</a>
    </li>
    <li class="menu_iconb">
        <a href="#">Deconnexion <img style="margin-right: 15px;" src="icon/5.png" alt="#" /> </a>
    </li>
    {{-- <li class="menu_iconb">
        <a href="#">S'inscrire<img style="margin-left: 15px;" src="icon/6.png" alt="#" /></a>
    </li> --}}
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