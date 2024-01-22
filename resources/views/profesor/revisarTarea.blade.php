@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionarTareas.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Revisión de tarea')
{{-- seccion de navbar --}}
@section('navbar')
    @include('layouts.navbarProf')
@endsection
@section('content')

    {{-- FORM DE EDICION  tarea --}}
    <div class="revisarTarea">
        <h1>Revisión de tarea</h1>
        <div>
            <p>
                Nombre del alumno:

            </p>
            <span>Pedro</span>
            <br>
        </div>

        <div>
            <p>
                Nombre de su video:

            </p>
            <video width="640" height="480" controls>
                <source src="" type="video/mp4" />
                Tu navegador no soporta videos HTML5.
            </video>
            <br>
        </div>
        <div>
            <h3>Rubrica de Evaluación</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Rúbricas de interpretación</th>
                        <th scope="col">Nivel 4</th>
                        <th scope="col">Nivel 3</th>
                        <th scope="col">Nivel 2</th>
                        <th scope="col">Nivel 1</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Ritmo</th>
                        <td>Lee e interpreta
                            patrones con precisión
                            con pulso constante,
                            sin dudar, sin
                            interrupciones
                        </td>
                        <td>Lee e interpreta la
                            mayoría de los
                            patrones con precisión
                            con pulso constante y
                            pocas interrupciones
                        </td>
                        <td>Lee e interpreta
                            algunos patrones con
                            precisión con
                            frecuentes
                            interrupciones
                        </td>
                        <td>
                            Lee e interpreta
                            patrones sólo con
                            ayuda
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Notas</th>
                        <td>
                            Reproduce todas las
                            notas correctamente
                        </td>
                        <td>
                            Reproduce la mayoría de las notas
                        </td>
                        <td>
                            Reproduce solo
                            algunas de las notas
                            correctamente
                        </td>
                        <td>
                            Requiere la asistencia
                            para reproducir las
                            notas correctas
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Dinámica</th>
                        <td>
                            Los signos de
                            dinámica se
                            interpretan con
                            precisión
                        </td>
                        <td>
                            Los signos de dinámica
                            se interpretan en su
                            mayoría con precisión
                        </td>
                        <td>
                            Se interpretan solo algunos signos de dinámica
                        </td>
                        <td>
                            No se interpretan los signos de dinámica
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tempo</th>
                        <td>
                            Mantiene el pulso en
                            toda la pieza
                        </td>
                        <td>
                            Ocasionalmente pierde el pulso

                        </td>
                        <td>
                            Evidencia un pulso básico pero inconsistente
                        </td>
                        <td>
                            Pulso inconsistente a
                            lo largo de la pieza
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Articulación</th>
                        <td>
                            Se interpretan todas
                            las articulaciones como están indicadas
                        </td>
                        <td>
                            Se interpretan la mayoría de las articulaciones como están indicadas
                        </td>
                        <td>
                            Se interpretan algunas de las articulaciones como están indicadas
                        </td>
                        <td>
                            Requier asistencia para interpretar las articulaciones

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Fraseo</th>
                        <td>
                            Todo el fraseo es correcto

                        </td>
                        <td>
                            Realiza la mayor parte
                            de los fraseos
                        </td>
                        <td>
                            Realiza algunos fraseos

                        </td>
                        <td>
                            Requier asistencia para la realización de fraseos
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Postura</th>
                        <td>
                           Demuestra
                            consistentemente una
                            postura correcta
                            durante la
                            interpretación
                        </td>
                        <td>
                            Demuestra regularmente una
                            postura correcta
                            durante la
                            interpretación
                        </td>
                        <td>
                            Con algunas indicaciones demuestra una correcta postura durante la interpretación 

                        </td>
                        <td>
                            Requiere asistencia
                            para lorar una
                            postura correcta
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <h3>Evalúa conforme la rúbrica mostrada</h3>
            <form>
                
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Ritmo*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                        <option value="4">Nivel 4</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Notas*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                        <option value="4">Nivel 4</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Dinámica*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                        <option value="4">Nivel 4</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Tempo*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                        <option value="4">Nivel 4</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Articulación*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                        <option value="4">Nivel 4</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Fraseo*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                        <option value="4">Nivel 4</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputAddress2" class="form-label">Postura*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleeciona una opción de la lista</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                        <option value="4">Nivel 4</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Observaciones*</label>
                  <textarea class="form-control" placeholder="" id="" style="height: 100px"></textarea>
                </div>

               
                <div class="contenedor-btns">
                    <button type="submit" class="btn btn-success">Realizar evaluación</button>
                    {{-- falta agregar ruta de ir a tabla de vista "evaluacion" --}}
                    {{-- <a href="{{route('admin.')}}" class="btn btn-danger">Cancelar</a> --}}
                </div>
            </form>
        </div>


    </div>

@endsection
{{-- seccion de footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
