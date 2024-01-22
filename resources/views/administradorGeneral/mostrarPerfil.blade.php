@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionPerfil.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Información personal')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')

    <div class="gestionPerfil">
        <h1>Perfil</h1>
        <h3>Tu información</h3>
        <div className='contenedorInfo'>
            <form action="" method="">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="apellidoPaterno">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="apellidoMaterno">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="contrasena">
                </div>
                <button type="submit" class="btn btn-success">Actualizar datos</button>
            </form>
        </div>
    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection