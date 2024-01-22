@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Gestion de lección')
{{-- seccion de navbar --}}
@section('navbar')
    @include('layouts.navbarAdmin')
@endsection
@section('content')


    {{-- FORM DE EDICION O AGREGAR CONTENIDO --}}

    <div class='edicion-recurso'>
        <h1>Edición del contenido de la lección</h1>

        <div class='contenedorInfo'>


            <form class="row g-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Nombre de lección</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                {{-- <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Nombre del recurso</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div> --}}
                <div class="col-12">
                    <label for="" class="form-label">Descripción de la lección</label>
                    <textarea class="form-control" placeholder="" id="" style="height: 100px"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Video asignado a la lección</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Asigna un video de la lista</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Actualizar Lección</button>
                    <a href="{{ route('admin.showLeccion') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

        </div>

    </div>
@endsection
{{-- seccion de footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
