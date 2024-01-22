
@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionarSucursales.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Edición de sucursal')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- FORM De AGREGAR sucursal --}}
    <div class="edicionGrupo">
        <h1>Editar datos de sucursal</h1>
        
        <div className='contenedorInfo'>
            <form action="{{ route('admin.updateSucursal', $sucursal) }}" method="POST">
                @csrf

                @method('put')

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre de la sucursal*</label>
                    <input type="text" class="form-control" name= "nombre" id="nombre" value="{{$sucursal->nombre}}">
                </div>
                @error('nombre')
                    {{$message}}
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dirección de la sucursal*</label>
                    <textarea class="form-control" placeholder="" name="direccion" id="direccion" style="height: 100px">{{$sucursal->direccion}}</textarea>
                </div>
                @error('direccion')
                    {{$message}}
                @enderror
                <br>
                <div class="contenedor-btns">
                    <button type="submit" class="btn btn-success">Actualizar sucursal</button>
                    <a href="{{route('admin.showSucursal')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection