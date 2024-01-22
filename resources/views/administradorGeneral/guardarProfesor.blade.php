@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionarProfesor.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Nuevo Profesor')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')

    {{-- FORM DE EDICION O AGREGAR Profesores --}}
    <div class="edicionGrupo">

        <h1>Agregando nuevo profesor</h1>

        <div className='contenedorInfo'>
            <form>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido paterno*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido materno*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Usuario*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dirección email*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña*</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="contenedor-btns">
                    <button type="submit" class="btn btn-success">Agregar profesor</button>
                    <a href="{{route('admin.gesProf')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>

    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection