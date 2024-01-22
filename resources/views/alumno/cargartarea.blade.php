@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
@endsection

@section('title', 'Lecciones del módulo')
@section('navbar')
    @include('layouts.navbarAlumno')
@endsection

@section('content')
    {{-- HTML visor de la tarea a realizar y cargar --}}
    <div class='cargarTareaContainer'>
        <h1>Tarea</h1>
        <p>
            Descripción de la tarea
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit possimus temporibus libero itaque natus, pariatur
            quaerat! Quisquam, hic accusantium nemo architecto deserunt suscipit ducimus ratione modi consequatur at
            repellendus fugit.
        </p>
        <div class='contenedorInfo'>


            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Adjunta tu evidencia en video</label>
                    <input type="file" class="form-control" id="" placeholder="">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Subir tarea</button>
                </div>
            </form>

        </div>

    </div>

@endsection
