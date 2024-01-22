@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/bienvenida.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('title', 'Bienvenido a Educacion Musical Integral')
{{-- seccion de navbar --}}
@section('navbar')
    @include('layouts.navbarAlumno')
@endsection
@section('content')
    {{-- HTML seccion de bienvenida --}}
    <div class="cont-bienvenida">

        <h1 class="mb-5"> Bienvenido alumno a Educación Musical Integral - Tu Destino Musical</h1>

        <h3> ¡Donde la música cobra vida!</h3>
        <p>
            En Educación Musical Integral, estamos dedicados a enriquecer tu viaje musical y ayudarte a alcanzar todo tu
            potencial como músico. Somos tu recurso de confianza para aprender y perfeccionar tus habilidades en
            instrumentos específicos como guitarra, piano, violín y muchos más.
            <br><br>
            ¿Por qué elegir Educación Musical Integral?
            <br>
        <ul>
            <li>

                Instructores Experimentados: Nuestros talentosos y apasionados instructores cuentan con años de experiencia
                en
                la
                enseñanza musical y están aquí para guiarte en cada paso del camino.
            </li>
            <li>
                Lecciones Personalizadas: Adaptamos nuestras lecciones a tus necesidades individuales y nivel de habilidad,
                ya
                seas un principiante absoluto o un músico avanzado.

            </li>
            <li>

                Variedad de Instrumentos: Ofrecemos una amplia gama de instrumentos para que puedas elegir. Desde cuerdas
                hasta
                teclas, viento y más, ¡tenemos lo que necesitas!
            </li>
            <li>
                Recursos en Línea: Accede a recursos educativos,, videos tutoriales y más, disponibles las 24 horas del día,
                los 7
                días de la semana, para que puedas aprender a tu propio ritmo.
            </li>
            <li>

                Comunidad Musical: Únete a nuestra vibrante comunidad de músicos, donde podrás conectarte con otros
                apasionados de
                la música, colaborar en proyectos musicales y encontrar inspiración.
            </li>

        </ul>

        Estamos comprometidos a brindarte la mejor experiencia musical posible. Explora nuestro sitio, descubre nuestras
        lecciones y recursos, y da el primer paso hacia tu viaje musical.

        <br><br>
        Educación Musical Integral está aquí para apoyarte en cada acorde y nota.
        <br><br>
        ¡La música es una aventura que nunca termina, y estamos emocionados de ser parte de tu viaje!
        <br><br>
        ¡Únete a nosotros hoy y comencemos a crear música juntos!
        <br><br>
        Atentamente.
        <br>
        <b> Julián Siloé Silva Bautista</b>
        <br>
        <i> Administrador – Director</i>

        </p>


    </div>
@endsection
{{-- seccion de footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
