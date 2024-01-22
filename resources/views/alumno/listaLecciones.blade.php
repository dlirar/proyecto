@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Mostrando módulos')
{{-- seccion de navbar --}}
@section('navbar')
    @include('layouts.navbarAlumno')
@endsection
@section('content')
    {{-- HTML seccion de cards de modulos --}}
    <div class="modulosContainer">
        <h1 class="mb-5">Lista de lecciones</h1>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Leccion 1: popó
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non minus officiis vel ex tenetur quaerat facilis dolorum? Minus veritatis, molestiae consectetur rem sequi dignissimos. Consequuntur rerum eligendi animi natus officiis.
                        <br>
                        <a href="{{route('alumno.leccion')}}" class="btn btn-success mt-3">Ver lección</a>
    
                    
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
