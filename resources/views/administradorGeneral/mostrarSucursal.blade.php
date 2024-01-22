@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionarSucursales.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Gestion de Sucursales')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- TABLA DE SUCURSALES --}}
    <div class="containerTablaSucursales">
        <h1>Tabla de sucursales</h1>
        @if (session('status'))
           <script>
                alert( "{{ session('status') }}" );
           </script>
        @endif
        <a href="{{route('admin.saveSucursal')}}" class="btn btn-success">Nueva Sucursal</a>

        <div class="tablasucursales">

            <table class='tabla-contenidos table table-striped table-bordered table-hover'>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sucursales as $sucursal)
                        <tr>
                            <td scope="row"> {{$sucursal->idSucursal}} </td>
                            <td> {{$sucursal->nombre}} </td>
                            <td> {{$sucursal->direccion}} </td>
                        
                            <td style="display: flex;">
                                <a href="{{route('admin.editSucursal',$sucursal)}}" class="estilo-editarBtn">
                                    <img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png" alt="pencil" />
                                </a>  
                                <form action="{{route('admin.destroySucursal',$sucursal)}}" method="POST" class="estilo-editarBtn">

                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="border: none;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC"></button>
                                </form>                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </Table>


        </div>
    </div>

    {{-- FORM DE EDICION O AGREGAR sucursal --}}
    {{-- <div class="edicionGrupo">
        <h1>Edición de sucursal</h1>

        <div className='contenedorInfo'>
            <form>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre de la sucursal*</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dirección de la sucursal*</label>
                  <textarea class="form-control" placeholder="" id="" style="height: 100px"></textarea>
                </div>
               
                <button type="submit" class="btn btn-success">Actualizar datos</button>
            </form>
        </div>

    </div>  --}}

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection