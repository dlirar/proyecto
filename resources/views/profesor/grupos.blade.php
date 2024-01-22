@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionGrupo.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Grupos asignados')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarProf')
@endsection
@section('content')
    {{-- TABLA DE GRUPOS --}}
    <div class="tablaGrupos">
        <h1>Tabla de grupos a los que se encuentra asignado</h1>

        <table class='tabla-contenidos table table-striped table-bordered table-hover'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del grupo</th>
                    <th scope="col">Profesor asignado</th>
                    <th scope="col">Alumnos asignados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Grupo 1 de teclado para principiantes</td>
                    <td>
                        Barbara Mendez
                    </td>
                    <td>
                        80
                    </td>
                </tr>
               
            </tbody>
        </Table>

    </div>
@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection