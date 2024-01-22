@extends('layouts.plantilla')


@section('links')
    <link rel="stylesheet" href="/css/gestionarAlumnos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Gestion de Alumnos')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- TABLA DE ALUMNOS --}}
    <div class="containerTablaAlumnos">
        <h1>Tabla de alumnos</h1>
        <a href="#" class="btn btn-success">Nuevo alumno</a>

        <div class="tablaAlumnos">

            <table class='tabla-contenidos table table-striped table-bordered table-hover'>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha de ingreso</th>
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
                        <td>martinqui9@correo.com</td>
                        <td>MartinQuintana</td>
                        <td>**********</td>
                        <td>DESAPARECIDO</td>
                        <td>05/05/2333</td>
                        <td style="display: flex;"><img width="48" height="48"
                                src="https://img.icons8.com/color-glass/48/pencil.png" alt="pencil" /> <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC">
                        </td>
                    </tr>

                </tbody>
            </Table>

        </div>

    </div>

    {{-- FORM DE EDICION O AGREGAR alumnos --}}
    {{-- <div class="edicionGrupo">

        <h1>Edición de alumno</h1>

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
                    <label for="exampleInputEmail1" class="form-label">Email address*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password*</label>
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
                <button type="submit" class="btn btn-success">Actualizar datos</button>
            </form>
        </div>

    </div> --}}

@endsection

{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection