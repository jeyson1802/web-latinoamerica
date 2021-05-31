@extends('layouts.app')

@section('title', 'Inicio - MINPAES')

@section('content')

<div class="intro__content">
    <img src="images/ministerio-letra.png" class="w-100" alt="Ministerio de Arrepentimiento y Santidad América Latina">
    <p class="intro__nota">Selecciones su nación para acceder a todos<br> los canales de comunicación</p>
    <form action="" class="intro__form"  autocomplete="off">
        <input id="myInput" type="text" name="myCountry" placeholder="Escriba el nombre del pais">
        <button id="buscar"> <img src="images/ico-buscar.svg" alt=""> </button>
    </form>
    <div class="intro__redes">
       <span> Síguenos en redes sociales</span>
        <div class="mt-md-3">
            <a href="#"> <img src="images/ico-facebook.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-ig.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-whatsapp.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-twitter.svg" alt="" /> </a>
            <a href="#"> <img src="images/ico-youtube.svg" alt="" /> </a>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush