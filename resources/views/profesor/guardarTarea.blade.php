@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionarTareas.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Agregar nueva tarea')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarProf')
@endsection
@section('content')

    {{-- FORM DE  AGREGAR tarea --}}
    <div class="edicionTarea">
        <h1>Agregar nueva tarea</h1>

        <div className='contenedorInfo'>
            <form>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre de la tarea*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Requisitos de la tarea*</label>
                  <textarea class="form-control" placeholder="" id="" style="height: 100px"></textarea>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Lección asociada*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre del recurso*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div> --}}
                <div class="mb-3">
                    <label for="inputAddress2" class="form-label">Adjunta el recurso en video</label>
                    <input type="file" class="form-control" id="" placeholder="">
                </div>

               
                <div class="contenedor-btns">
                    <button type="submit" class="btn btn-success">Agregar tarea</button>
                    {{-- falta agregar ruta de ir a tabla de tareas --}}
                    <a href="{{route('prof.home')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>

    </div> 

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection