<nav class="navbar navbar-expand-lg bg-body-tertiary navbar_container">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"  style="justify-content: space-around; align-items: center; width: 100%;"  >
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('admin.homeView')}}">
                        <img src="/assets/images/405305986_849800627152394_1400364019542239955_n.jpg" alt="Bootstrap" width="100"
                            height="110">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.homeView')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.showPerfil')}}">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.showCurso')}}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.showGrupo')}}">Grupos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Consultar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('admin.gesProf')}}">Profesores</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="{{route('admin.mosAlumno')}}">Alumnos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('admin.showSucursal')}}">Sucursales</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-danger">Cerrar Sesión</button>

                </li>

        </div>
    </div>
</nav>
