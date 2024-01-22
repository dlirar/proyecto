@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Mostrando Cursos')
{{-- seccion de navbar --}}
@section('navbar')
    @include('layouts.navbarAlumno')
@endsection
@section('content')
    {{-- HTML DE CONTENDOR DE CARDS DE CURSOS --}}

    <h1 style="padding: 0 45px;">Lista de cursos</h1>
    @if (session('estado'))
        {{ session('estado') }}
    @endif
    <div class="cursosContainer">

        <div class="card" style="width: 45%;">
            <img src="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/13626.png" frameborder="0">
            <div class="card-body">
                <h5 class="card-title">Curso de teclado para principiantes</h5>
                <p class="card-text"> Este curso esta diseñado para quienes tienen poca o ninguna experiencia musical.
                    Durante el curso, los
                    estudiantes aprenderán sobre los fundamentos de la música, incluyendo la ritmica, que se refiere al
                    aspecto rítmico y temporal de la música, la melodia, que se centra en las secuencias de notas que crean
                    una melodía, y la armonía, que se trata de cómo las notas se combinan para crear acordes y sonidos
                    agradables. Además, adquirirán habilidades técnicas en el teclado, aprenderán a leer partituras y
                    practicarán regularmente. Los instructores brindarán apoyo y retroalimentación para ayudar a los
                    estudiantes a avanzar en su viaje musical desde los conceptos básicos.</p>
                <div style="display: flex; flex-wrap:wrap;justify-content: space-between;   ">
                    <a href="#" class="btn btn-success">Ver módulos</a>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection