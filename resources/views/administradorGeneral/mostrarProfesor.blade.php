@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionarProfesor.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Gestion de Profesores')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')

    {{-- TABLA DE PROFESORES --}}
    <div class="containerTablaProfesores">
        <h1>Tabla de profesores</h1>
        <a href="#" class="btn btn-success">Nuevo profesor</a>

        <div class="tablaProfesores">

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
                        <td>elicasti8@correo.com</td>
                        <td>ElizabethCastillo</td>
                        <td>**********</td>
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
                        <td>eliasgarpe@correo.com</td>
                        <td>EliasGarcia</td>
                        <td>**********</td>
                        <td  style="display: flex;"><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                                alt="pencil" /> <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC">
                        </td>
                    </tr>
                </tbody>
            </Table>

        </div>

    </div>

    {{-- FORM DE EDICION O AGREGAR Profesores --}}
    {{-- <div class="edicionGrupo">

        <h1>Edición de profesor</h1>

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
                <button type="submit" class="btn btn-success">Actualizar datos</button>
            </form>
        </div>

    </div> --}}

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection