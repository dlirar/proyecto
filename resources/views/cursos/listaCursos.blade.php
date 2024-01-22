@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/footer.css">

@endsection

@section('title','Lista de cursos')

@section('content')
    {{-- HTML DE CONTENDOR DE CARDS DE CURSOS --}}
    <div class="cursosContainer">
        @foreach ($cursos as $curso)
            <div class="card" style="width: 80%;">
                <img src="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/13626.png" frameborder="0">
                <div class="card-body">
                    <h5 class="card-title"> {{$curso->nombreCurso}} </h5>
                    <p class="card-text"> {{$curso->descripcion}} </p>
                    
                    <a href="{{ route('cursos.mostrar', $curso->idCurso) }}" class="btn btn-success">Ver curso</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection