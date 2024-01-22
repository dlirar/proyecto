@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionGrupo.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Agregando grupo')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
  {{-- FORM DE  AGREGAR GRUPOS Y TABLA DE ALUMNOS ASIGNADOS --}}
  <div class="edicionGrupo">



    <h1>Agregando nuevo grupo</h1>

    <div class='contenedorInfo'>


        <form class="row g-3" action="">
            <div class="col-md-6">
                <label for="" class="form-label">Nombre del grupo</label>
                <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Curso asignado al grupo</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Asigna un curso de la lista</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Profesor asignado al grupo</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Asigna un profesor de la lista</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Alumnos inscritos al grupo</label>
                <input type="number" class="form-control" id="" placeholder="" disabled>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Espacios disponibles para el grupo</label>
                <input type="number" class="form-control" id="" placeholder="" disabled>
            </div>
            <div class="col-12">
                {{-- <a href="#" class="btn btn-success">Guardar Grupo</a> --}}
                <button type="submit" class="btn btn-success">Agregar Grupo</button>

                <a href="{{route('admin.gesGrupo')}}" class="btn btn-danger">Cancelar</a>

            </div>
        </form>

    </div>



</div>
@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection