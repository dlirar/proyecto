@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Agregar curso nuevo')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- FORM DE EDICION O AGREGAR CONTENIDO --}}

    <div class='edicion-recurso'>
        <h1>Agrega un curso </h1>
        @if (session('estado'))
            {{ session('estado') }}
        @endif
        <div class='contenedorInfo'>
            <form class="row g-3" action="{{ route('admin.guardarCurso') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="" class="form-label">Nombre del curso</label>
                    <input type="text" class="form-control" name="nombreCurso" id="nombreCurso" placeholder="" value="{{old('nombreCurso')}}">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Descripción del curso</label>
                    <textarea class="form-control" placeholder="" name="descripcion" id="descripcion" style="height: 100px">{{old('descripcion')}}</textarea>
                </div>
                <div class="col-md-6">
                    <img style="width: 35%" src="/assets/images/arturo-serna-1024x771.jpg" alt=""><br>
                    <label for="inputAddress2" class="form-label">Archivo adjunto</label>
                    <input type="file" class="form-control" name="imagenCursoRuta" id="imagenCursoRuta" placeholder="" accept="image/*">
                    @error('imagenCursoRuta')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">¿Desea que el curso este activo?</label>
                    <select class="form-select" aria-label="">
                        <option selected>Selecciona una opcion</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Agregar curso</button>
                    <a href="{{route('admin.showCurso')}}" class="btn btn-danger">Cancelar</a>

                </div>
            </form>
        </div>
    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection