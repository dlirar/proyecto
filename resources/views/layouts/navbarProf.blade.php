<nav class="navbar navbar-expand-lg bg-body-tertiary navbar_container">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"
                style="justify-content: space-between; align-items: center; width: 100%;">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('prof.home')}}">
                        <img src="/assets/images/405305986_849800627152394_1400364019542239955_n.jpg" alt="Bootstrap"
                            width="100" height="110">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('prof.home')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('prof.editPerfil')}}">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('prof.showCalendar')}}">Calendario</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Consultar
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('prof.showLeccion')}}">Lecciones</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="{{route('prof.showGroup')}}">Grupos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('prof.editPerfil')}}">Evaluación</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-danger">Cerrar Sesión</button>

                </li>

        </div>
    </div>
</nav>
