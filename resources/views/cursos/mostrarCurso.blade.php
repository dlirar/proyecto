@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/mostrarCurso.css">
@endsection

@section('title', 'Curso ' . $curso->nombreCurso)

@section('content')
    <div class="cursosContainer">
        <h1 class="mb-5">Bienvenido al curso {{$curso->nombreCurso}} </h1>
        <div class="containerCardsCursodfsafasfd">
            <div class="card mb-5" style="width: 18rem;">
                <img src="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/13626.png" class="card-img-top"
                    alt="..." frameborder="0">
                <div class="card-body">
                    <h5 class="card-title">Bienvenido al curso {{$curso->nombreCurso}} </h5>
                    <p class="card-text"> Este curso esta diseñado para quienes tienen poca o ninguna experiencia
                        musical.
                        Durante el curso, los estudiantes aprenderán sobre los fundamentos de la música, incluyendo la
                        ritmica, que se refiere al
                        aspecto rítmico y temporal de la música, la melodia, que se centra en las secuencias de notas
                        que crean
                        una melodía, y la armonía, que se trata de cómo las notas se combinan para crear acordes y
                        sonidos
                        agradables. Además, adquirirán habilidades técnicas en el teclado, aprenderán a leer partituras
                        y
                        practicarán regularmente. Los instructores brindarán apoyo y retroalimentación para ayudar a los
                        estudiantes a avanzar en su viaje musical desde los conceptos básicos.</p>
                    <a href="{{ route('cursos.mostrar', $curso->idCurso) }}" class="btn btn-success">Ir a los módulos</a>
                </div>
            </div>
        </div>
@endsection
