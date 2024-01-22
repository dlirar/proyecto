@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionarAlumnos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Edición de nuevo alumno')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')

    {{-- FORM DE  AGREGAR alumnos --}}
    <div class="edicionGrupo">

        <h1>Nuevo alumno</h1>

        <div className='contenedorInfo'>
            <form>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre*</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido paterno*</label>
                    <input type="text" class="form-control" id="apellidoPaterno">
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
                    <label for="exampleInputEmail1" class="form-label">Dirección de email*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña*</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Estado*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Fecha de ingreso*</label>
                    <input type="date" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Grupo asignado</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Asigna un grupo de la lista</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="contenedor-btns">
                    <button type="submit" class="btn btn-success">Agregar alumno</button>
                    <a href="{{route('admin.mosAlumno')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>

    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection