<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function mostrarCurso(){
        return view('alumno.curso');
    }

    public function mostrarModulo(){
        return view('alumno.modulo');
    }

    public function mostrarListaLeccion(){
        return view('alumno.listaLecciones');
    }

    public function mostrarLeccion(){
        return view('alumno.leccion');
    }
}
