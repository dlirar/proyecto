@extends('layouts.plantilla')


@section('links')
 

@endsection

@section('title', 'Visualizando lección')
{{-- seccion de navbar --}}
@section('navbar')
    @include('layouts.navbarAlumno')
@endsection
@section('content')
    {{-- seccion de visualizacion de video  DE ALUMNOS --}}
    <div class="containerTablaAlumnos">
        <h1>Lección shalalalala</h1>

        <video width="640" height="480" controls>
            <source src="" type="video/mp4" />
            Tu navegador no soporta videos HTML5.
        </video>
        <p>
            DESCRIPCION
        </p>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur earum possimus sed nobis minus officiis?
            Expedita alias voluptas optio quae odio tenetur asperiores magni odit non! Et voluptatum nisi corporis?
        </p>
        <div class="btncontainer">
            <a href="{{route('alumno.tarea')}}" class="btn btn-success mt-3">Ver tarea</a>
        </div>
    </div>
@endsection

{{-- seccion de footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
