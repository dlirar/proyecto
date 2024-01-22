@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Agregar módulo')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- FORM DE EDICION O AGREGAR modulo --}}

    <div class='edicion-recurso'>
        <h1>Agregando nuevo módulo </h1>

        <div class='contenedorInfo'>


            <form class="row g-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Nombre del módulo</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Descripción del módulo</label>
                    <textarea class="form-control" placeholder="" id="" style="height: 100px"></textarea>
                </div>
                {{-- <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Curso asignado al módulo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Asigna un curso de la lista</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div> --}}
                {{-- <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Video asignado al módulo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Asigna un video de la lista</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div> --}}
                {{-- <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Evaluación asignada al módulo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Asigna una evaluación de la lista</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div> --}}
                <div class="col-md-6">
                    <img style="width: 35%" src="/assets/images/arturo-serna-1024x771.jpg" alt=""><br>
                    <label for="inputAddress2" class="form-label">Archivo adjunto</label>
                    <input type="file" class="form-control" name="imagenCursoRuta" id="imagenCursoRuta" placeholder="" accept="image/*">
                    @error('imagenCursoRuta')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-12">
                    {{-- <a href="#" class="btn btn-success">Agregar Módulo</a> --}}
                    <button type="submit" class="btn btn-success">Agregar Módulo</button>

                    <a href="{{route('admin.showModulo')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

        </div>

    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection