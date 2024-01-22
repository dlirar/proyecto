@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionGrupo.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Gestion de Grupos')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- TABLA DE GRUPOS --}}
    <div class="tablaGrupos">
        <h1>Tabla de grupos</h1>
        <a href="#" class="btn btn-success">Nuevo Grupo</a>

        <table class='tabla-contenidos table table-striped table-bordered table-hover'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del grupo</th>
                    <th scope="col">Profesor asignado</th>
                    <th scope="col">Alumnos asignados</th>
                    <th scope="col">Editar</th>
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
                    <td  style="display: flex;"><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                            alt="pencil" /> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC">
                    </td>
                </tr>
               
            </tbody>
        </Table>

    </div>

    {{-- FORM DE EDICION O AGREGAR GRUPOS Y TABLA DE ALUMNOS ASIGNADOS --}}
    {{-- <div class="edicionGrupo">



    <h1>Edición de grupo</h1>

    <div class='contenedorInfo'>


        <form class="row g-3">
            <div class="col-md-6">
                <label for="" class="form-label">Nombre del grupo</label>
                <input type="text" class="form-control" id="" placeholder="">
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
            <div class="col-12">
                <a href="#" class="btn btn-success">Guardar Grupo</a>
            </div>
        </form>

    </div>

    <h2 style="margin-top: 45px">Lista de alumnos asignados a este grupo</h2>
    <div class="tabblaAlumnos">

        <table class='tabla-contenidos table table-striped table-bordered table-hover'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre (s)</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Martin</td>
                    <td>
                        Lopez
                    </td>
                    <td>
                        Quintana
                    </td>
                    <td><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                            alt="pencil" /> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC">
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>elizabeth</td>
                    <td>
                        Castillo
                    </td>
                    <td>
                        Montana
                    </td>
                    <td><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                            alt="pencil" /> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC">
                    </td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td>Elias</td>
                    <td>
                        Garcia
                    </td>
                    <td>
                        Perri
                    </td>
                    <td><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                            alt="pencil" /> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC">
                    </td>
                </tr>
            </tbody>
        </Table>

    </div>




</div> --}}
@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection