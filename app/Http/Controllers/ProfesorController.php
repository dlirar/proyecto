<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ProfesorController extends Controller
{
    public function bienvenida(){
        return view('profesor.bienvenida');
    }

    public function mostrarCalendario(){
        return view ('profesor.calendario');
    }

    public function actualizarCalendario(){
        return view('profesor.actualizarCalendario');
    }

    public function mostrarGrupos(){
        return view('profesor.grupos');
    }
    public function consultarPerfil(){
        return view('profesor.consultarPerfil');
    }

    public function crearTarea(){
        return view('profesor.guardarTarea');
    }

    public function mostrarLeccion(){
        return view('profesor.mostrarLeccion');
    }

    public function mostrarTarea(){
        return view ('profesor.mostrarTarea');
    }

    public function revisarTarea(){
        return view('profesor.revisarTarea');
    }
}
