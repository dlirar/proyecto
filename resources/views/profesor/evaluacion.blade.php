@extends('layouts.plantilla')

@section('links')
<link rel="stylesheet" href="/css/gestionarTareas.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Gestion de tareas')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarProf')
@endsection
@section('content')
{{-- TABLA DE TAREAS --}}
<div class="containerTablaSucursales">
    <h1>Tabla de tareas entregadas</h1>

    <div class="tablasucursales">

        <table class='tabla-contenidos table table-striped table-bordered table-hover'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del alumno</th>
                    <th scope="col">Nombre de la tarea</th>
                    <th scope="col">Nombre del archivo</th>
                    <th scope="col">Calificación</th>
                    <th scope="col">Evaluar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Pepito Ramirez</td>
                    <td>
                        Tarea 1
                    </td>
                    <td>
                        leccion 1 de piano
                    </td>
                    <td>
                        10
                    </td>
                    <td style="display: flex;">
                        {{-- <a href="{{route('admin.')}}" class="btn btn-success">Evaluar</a> --}}
                    </td>
                </tr>
            </tbody>
        </Table>

    </div>

</div>


@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection