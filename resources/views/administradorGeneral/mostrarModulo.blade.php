@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Mostrando módulos')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- HTML seccion de cards de modulos --}}
    <div class="modulosContainer">
        <h1 class="mb-5">Lista de módulos</h1>
        <a href="{{route('admin.saveModulo')}}" class="btn btn-success">Nuevo módulo</a>

        <div class="container_home">
            <div class="card" style="width: 35%;">
                <img src="https://soundsmarket.com/blog/wp-content/uploads/2020/02/Teclados-de-escenario-Sounds-Market-e1626947257721.jpg"
                    frameborder="0">
                <div class="card-body">
                    <h5 class="card-title">Módulo de rítmica</h5>
                    <p class="card-text">
                        El módulo de rítmica en el teclado se centra en ayudar a los estudiantes a mejorar su precisión y
                        ritmo al tocar el teclado. A través de ejercicios y retroalimentación, aprenderán a tocar en el
                        tempo correcto, corregir errores y desarrollar una interpretación musical más precisa.
                    </p>
                    <div  style="display: flex; flex-wrap:wrap; justify-content: space-between;">
                        <a href="{{route('admin.showLeccion')}}" class="btn btn-success">Ver lecciones</a>
                        <a href="{{route('admin.editModulo')}}" class="btn btn-success">Editar módulo</a>
                    </div>

                </div>
            </div>



        </div>

    </div>
@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection