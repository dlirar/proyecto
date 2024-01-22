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
    <h1>Tabla de tareas</h1>
    <a href="#" class="btn btn-success">Nueva Tarea</a>

    <div class="tablasucursales">

        <table class='tabla-contenidos table table-striped table-bordered table-hover'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Requisitos</th>
                    <th scope="col">Lección asignada</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Tarea 1</td>
                    <td>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, nam dolore ullam quo eos
                        sapiente totam sunt enim iusto ipsum dignissimos maiores a aliquid eveniet! Voluptatem nulla quo
                        aliquam labore!
                    </td>
                    <td>
                        leccion 1 de piano
                    </td>
                    
                    <td style="display: flex;">
                        <img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png" alt="pencil" /> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC">
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