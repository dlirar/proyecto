@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Mostrando lecciones')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarProf')
@endsection
@section('content')
    
{{-- seccion de tabla de contenido  --}}
    <div class="tablaContenido">
        @if (session('status'))
        <script>
            alert( "{{ session('status') }}" );
       </script>
        @endif
        <h1>Tabla de lecciones</h1>
        <!--<a href="{{route('admin.saveLeccion')}}" class="btn btn-success">Nueva Lección</a>-->
       <h3>Asignar o editar tarea de una lección.</h3>
        <table class='tabla-contenidos table table-striped table-bordered table-hover'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de lección</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Nombre de la tarea</th>
                </tr>
            </thead>
            <tbody>
                {{--@foreach ($lecciones as $leccion)
                    <tr>
                        <td scope="row"> {{$leccion->idLeccion}} </td>
                        <td> {{$leccion->nombreLeccion}} </td>
                        <td> {{$leccion->descripcion}} </td>
                         {{--cambiar de acuerdo a nombre de la variable para trae nombre dela tarea asignada 
                        <td>{{$leccion->nombreTarea}} </td>
                        <td style="display: flex;">
                            <a href="#" class="estilo-editarBtn">
                                <img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png" alt="pencil" />
                            </a>  
                            <form action="#" method="POST" class="estilo-editarBtn">

                                @csrf
                                @method('delete')
                                <button type="submit" style="border: none;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC"></button>
                            </form>                                
                        </td>
                    </tr>
                @endforeach--}}

            </tbody>
        </Table>

    </div>
    @endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection