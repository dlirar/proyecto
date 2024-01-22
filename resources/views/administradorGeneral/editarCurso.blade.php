@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Editar información básica del curso')
{{-- seccion de navbar --}}
@section('navbar')
    @include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- FORM DE EDICION O AGREGAR CONTENIDO --}}

    <div class='edicion-recurso'>
        <h1>Edición del curso </h1>

        <div class='contenedorInfo'>
            <form class="row g-3" action="{{ route('admin.updateCurso', $curso) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('put')

                <div class="col-md-6">
                    <label for="" class="form-label">Nombre del curso</label>
                    <input type="text" class="form-control" name="nombreCurso" id="nombreCurso"
                        value="{{ $curso->nombreCurso }}">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Descripción del curso</label>
                    <textarea class="form-control" placeholder="" name ="descripcion" id="descripcion" style="height: 100px"> {{ $curso->descripcion }} </textarea>
                </div>
                <div class="col-md-6">
                    <img style="width: 35%" src="{{$curso->imagenCursoRuta}}" alt="" id="thumbnail"><br>
                    <label for="inputAddress2" class="form-label">thumbnail del curso</label>
                    <input type="file" class="form-control" name ="imagenCurso" id="imagenCurso" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">¿Desea que el curso este activo?</label>
                    <select class="form-select" aria-label="">
                        <option selected>Selecciona una opcion</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </div>

                <div class="col-12">
                    {{-- <a href="#" class="btn btn-success">Guardar Curso</a> --}}
                    <button type="submit" class="btn btn-success">Actualizar curso</button>
                    <a href="{{ route('admin.showCurso') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- seccion de footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
@section('script')
    <script>
        document.getElementById('imagenCurso').addEventListener('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail').src = e.target.result;
            };
        reader.readAsDataURL(file);
    }
});
    </script>
@endsection