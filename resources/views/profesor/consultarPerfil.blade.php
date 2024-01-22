@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionPerfil.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Información personal')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarProf')
@endsection
@section('content')

    <div class="gestionPerfil">
        <h1>Perfil</h1>
        <h3>Tu información</h3>
        <div className='contenedorInfo'>
            <p><b>Nombre:</b></p>
            <p>MANOLO</p>
            <hr>
            <p><b>Apellido paterno:</b></p>
            <p>MANOLO</p>
            <hr>
            <p><b>Apellido materno :</b></p>
            <p>MANOLO</p>
            <hr>
            <p><b>Correo:</b></p>
            <p>MANOLO</p>
            <hr>
            <p><b>Usuario:</b></p>
            <p>MANOLO</p>
            <hr>
            <a href="{{route('prof.home')}}" class="btn btn-success">Regresar</a>


        </div>
    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection