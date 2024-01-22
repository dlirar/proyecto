@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/gestionCursos.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Mostrando Cursos')
{{-- seccion de navbar --}}
@section('navbar')
@include('layouts.navbarAdmin')
@endsection
@section('content')
    {{-- HTML DE CONTENDOR DE CARDS DE CURSOS --}}

    <h1 style="padding: 0 45px;">Lista de cursos</h1>
    <div  style="padding: 0 45px; margin-bottom:20px;">
        <a href="{{route('admin.saveCurso')}}" class="btn btn-success">Crear curso</a>
    </div>
    @if (session('estado'))
        {{ session('estado') }}
    @endif
    <div class="cursosContainer" style="display: flex; flex-wrap:wrap; justify-content:space-between;">
     
        
        @foreach ($cursos as $curso)
        <div class="card mb-5" style="width: 35%;">
            <img src="{{$curso->imagenCursoRuta}}" frameborder="0">
            <div class="card-body">
                <h5 class="card-title"> {{$curso->nombreCurso}} </h5>
                <p class="card-text"> {{$curso->descripcion}}</p>
                <div style="display: flex; flex-wrap:wrap;justify-content: space-between;   ">
                    <a href="{{route('admin.showModulo')}}" class="btn btn-success">Ver módulos</a>
                    <a href="{{route('admin.editCurso',$curso)}}" class="btn btn-success">Editar curso</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- HTML seccion de cards de modulos --}}
    {{-- <div class="modulosContainer">
        <h1 class="mb-5">Módulos del curso de teclado para principiantes</h1>
        <div class="container_home">
            <div class="card" style="width: 30%;">
                <img src="https://soundsmarket.com/blog/wp-content/uploads/2020/02/Teclados-de-escenario-Sounds-Market-e1626947257721.jpg"
                    frameborder="0">
                <div class="card-body">
                    <h5 class="card-title">Módulo de rítmica</h5>
                    <p class="card-text">
                        El módulo de rítmica en el teclado se centra en ayudar a los estudiantes a mejorar su precisión y
                        ritmo al tocar el teclado. A través de ejercicios y retroalimentación, aprenderán a tocar en el
                        tempo correcto, corregir errores y desarrollar una interpretación musical más precisa.
                    </p>
                    <a href="#" class="btn btn-success">Ver módulo</a>
                </div>
            </div>
            <div class="card" style="width: 30%;">
                <img src="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/13626.png" frameborder="0">
                <div class="card-body">
                    <h5 class="card-title">Curso de teclado para principiantes</h5>
                    <p class="card-text"> Este curso esta diseñado para quienes tienen poca o ninguna experiencia musical.
                        Durante el curso, los
                        estudiantes aprenderán sobre los fundamentos de la música, incluyendo la ritmica, que se refiere al
                        aspecto rítmico y temporal de la música, la melodia, que se centra en las secuencias de notas que crean
                        una melodía, y la armonía, que se trata de cómo las notas se combinan para crear acordes y sonidos
                        agradables. Además, adquirirán habilidades técnicas en el teclado, aprenderán a leer partituras y
                        practicarán regularmente. Los instructores brindarán apoyo y retroalimentación para ayudar a los
                        estudiantes a avanzar en su viaje musical desde los conceptos básicos.</p>
                    <div style="display: flex; flex-wrap:wrap;justify-content: space-between;   ">
                        <a href="#" class="btn btn-success">Ver módulos</a>
                        <a href="{{route('admin.editCurso')}}" class="btn btn-success">Editar curso</a>
                    </div>
                </div>
        </div>
            <div class="card" style="width: 30%;">
                <img src="https://academiadeorgano.com/wp-content/uploads/imagen_general_armonia_teclado.jpg"
                    frameborder="0">
                <div class="card-body">
                    <h5 class="card-title">Módulo de armonía</h5>
                    <p class="card-text">
                        El módulo de armonía se centra en enseñar a los estudiantes los conceptos fundamentales de la
                        armonía musical, incluyendo acordes, progresiones y técnicas de escritura. El objetivo es que los
                        estudiantes comprendan cómo la armonía enriquece la música y puedan aplicar estos conocimientos en
                        sus composiciones y interpretaciones.
                    </p>
                    <a href="#" class="btn btn-success">Ver módulo</a>
                </div>
            </div>

            <div class="card" style="width: 30%;">
                <img src="https://www.superprof.mx/blog/wp-content/uploads/2017/10/tener-una-profesora-de-piano-para-ti.jpg"
                    frameborder="0">
                <div class="card-body">
                    <h5 class="card-title">Módulo de melodía</h5>
                    <p class="card-text">
                        El módulo de melodía se centra en enseñar a los estudiantes cómo crear y ejecutar melodías musicales
                        efectivas. Esto incluye aprender los conceptos básicos de la melodía, componer melodías creativas y
                        entender su importancia en la música. Los estudiantes practican mediante ejemplos y ejercicios para
                        mejorar sus habilidades de composición y ejecución melódica.
                    </p>
                    <a href="#" class="btn btn-success">Ver módulo</a>
                </div>
            </div>
        </div>

    </div> --}}

    {{-- seccion de tabla de contenido  --}}
    {{-- <div class="tablaContenido">
        <h1>Tabla de lecciones</h1>

        <table class='tabla-contenidos table table-striped table-bordered table-hover'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de lección</th>
                    <th scope="col">Descirpción</th>
                    <th scope="col">Nombre del recurso</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Fundamentos del ritmo</td>
                    <td>Conceptos básicos que rigen la organización temporal de la música. Incluyen la comprensión de las
                        duraciones de las notas, la lectura de ritmos, la aplicación de acentos y la capacidad de mantener
                        un tempo constante. Estos elementos son esenciales para tocar cualquier instrumento musical de
                        manera precisa y expresiva.
                    </td>
                    <td>Video de fundamentos</td>
                    <td><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                            alt="pencil" /> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC"></img>
                    </td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>Compases y tiempos</td>
                    <td>Elementos esenciales en la música que determinan la estructura temporal de una pieza. Los compases
                        indican cómo se agrupan las notas en secciones regulares, mientras que los tiempos se refieren a la
                        cantidad y el tipo de notas que caben en cada compás. Estos conceptos ayudan a los músicos a
                        mantener un ritmo constante y a leer partituras de manera eficiente.
                    </td>
                    <td>Lectura de compases</td>
                    <td><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                            alt="pencil" /> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC"></img>
                    </td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td>Patrones rítmicos</td>
                    <td>Son secuencias regulares de notas con diferentes duraciones y acentos que se repiten en la música.
                        Estos patrones crean una base rítmica y contribuyen a la estructura musical. Los músicos utilizan
                        patrones rítmicos para dar forma y expresión a una composición, y son fundamentales para la
                        interpretación musical.
                    </td>
                    <td>Sin asignar</td>
                    <td><img width="48" height="48" src="https://img.icons8.com/color-glass/48/pencil.png"
                            alt="pencil" /> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABeklEQVR4nO2WvU6EQBSF73vYGgv3BSwYxVJLzRaa8AZKZ6Uka2GyT2CjjaUxvpTbauI2CxLgGEbRLMKwBIYZN/ckp2KK8839YYhYLBarEARNIAgNntI/Dg8jEPD3D+G7M/guBvIMZ7sHPQIMGh7S5+5LnwAwYWKAkloMaSeTLjGA4Ap0E7eQ4BbqprVvoczbRh9nyARAchcgjkKk16e1Z9KrY8ThAsnDjV0ASR4+jr9cA1GEL86pIGhIgMwbLQWTDhdIg/Fv+GBceSbzRuYBZMDLo78BvytRvvmfb5MTOyqghohk2DbhYXILVUK0DA/Tr1EJUb713B/RSuFhHCDv+ToAxYqFDQCVA1sx2FYCpJXbpmaIGyBoaADVqlStWNgAsB4/stuLxlVZrkR6H9hRgSWIhj1fQKjCg5/TCq2yw/sw6RIDCK5AN0HQXHsbOfSuD8Ch5wHm4EknwBYcetUY/g17tKkNQELs0AYceuy5neb5zWsPz2KxyDp9AneQb6NeRCEPAAAAAElFTkSuQmCC"></img>
                    </td>
                </tr>
            </tbody>
        </Table>
        <a href="#" class="btn btn-success">Nueva Lección</a>

    </div> --}}

    {{-- FORM DE EDICION O AGREGAR CONTENIDO --}}

    {{-- <div class='edicion-recurso'>
        <h1>Edición del contenido</h1>

        <div class='contenedorInfo'>


            <form class="row g-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Nombre de lección</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Nombre del recurso</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Descripción de la lección</label>
                    <textarea class="form-control" placeholder="" id="" style="height: 100px"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Archivo adjunto</label>
                    <input type="file" class="form-control" id="" placeholder="">
                </div>

                <div class="col-12">
                    <a href="#" class="btn btn-success">Guardar Lección</a>
                </div>
            </form>

        </div>

    </div> --}}
@endsection
{{-- seccion de footer --}}
@section('footer')
@include('layouts.footer')
@endsection