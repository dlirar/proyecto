<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(AdminController::class)->group(function () {

    //Ruta para vista de bienvenida del Admin
    Route::get('administradorGeneral', 'bienvenida')->name('admin.homeView');;


    //Ruta para vista de datos del perfil del Admin
    Route::get('administradorGeneral/perfil', 'mostrarPerfil')->name('admin.showPerfil');;

    Route::get('administradorGeneral/mostrarAlumno', 'mostrarAlumno')->name('admin.mosAlumno');
    Route::post('administradorGeneral/editarAlumno', 'editarAlumno')->name('admin.editAlumno');

    //Rutas para las vistas de Curso del administrador
    Route::get('administradorGeneral/mostrarCurso', 'mostrarCurso')->name('admin.showCurso');
    Route::get('administradorGeneral/guardarCurso', 'guardarCurso')->name('admin.saveCurso');
    Route::post('guardarDatosCurso', 'guardarDatosCurso')->name('admin.guardarCurso');
    Route::get('administradorGeneral/editarCurso/{curso}', 'editarCurso')->name('admin.editCurso');
    Route::put('actualizarDatosCurso/{curso}','actualizarDatosCurso')->name('admin.updateCurso');

    //Rutas para las vistas de Modulo del administrador 
    Route::get('administradorGeneral/mostrarModulo', 'mostrarModulo')->name('admin.showModulo');
    Route::get('administradorGeneral/guardarModulo', 'guardarModulo')->name('admin.saveModulo');
    Route::get('administradorGeneral/editarModulo', 'editarModulo')->name('admin.editModulo');

    //Rutas para las vistas de Leccion del administrador
    Route::get('administradorGeneral/mostrarLeccion', 'mostrarLeccion')->name('admin.showLeccion');
    Route::get('administradorGeneral/guardarLeccion', 'guardarLeccion')->name('admin.saveLeccion');
    Route::post('guardarDatosLeccion', 'guardarDatosLeccion')->name('admin.guardarLeccion');

    //Rutas para las vistas de Grupo del administrador
    Route::get('administradorGeneral/mostrarGrupo', 'mostrarGrupo')->name('admin.showGrupo');;

    //Rutas para las vistas de Profesor del administrador
    Route::get('administradorGeneral/mostrarProfesor', 'mostrarProfesor')->name('admin.gesProf');

    //Rutas para el modulo de gestión de Sucursales
    Route::get('administradorGeneral/mostrarSucursal', 'mostrarSucursal')->name('admin.showSucursal');
    Route::get('administradorGeneral/guardarSucursal', 'guardarSucursal')->name('admin.saveSucursal');
    Route::get('administradorGeneral/editarSucursal/{sucursal}', 'editarSucursal')->name('admin.editSucursal');
    Route::post('guardarDatosSucursal', 'guardarDatosSucursal')->name('admin.guardarSucursal');
    Route::put('actualizarDatosSucursal/{sucursal}', 'actualizarDatosSucursal')->name('admin.updateSucursal');
    Route::delete('eliminarSucursal/{sucursal}', 'eliminarSucursal')->name('admin.destroySucursal');
});

Route::controller(ProfesorController::class)->group(function(){
    Route::get('profesor/bienvenida', 'bienvenida')->name('prof.home');
    Route::get('profesor/calendario', 'mostrarCalendario')->name('prof.showCalendar');
    Route::get('profesor/grupos', 'mostrarGrupos')->name('prof.showGroup');
    Route::get('profesor/actualizarCalendario', 'actualizarCalendario')->name('prof.editCalendar');
    Route::get('profesor/consultarPerfil','consultarPerfil')->name('prof.editPerfil');
    Route::get('profesor/guardarTarea', 'crearTarea')->name('prof.saveTarea');
    Route::get('profesor/mostrarLeccion', 'mostrarLeccion')->name('prof.showLeccion');
    Route::get('profesor/mostrarTarea', 'mostrarTarea')->name('prof.showTarea');
    Route::get('profesor/revisarTarea', 'revisarTarea')->name('prof.reviewTarea');
});

Route::controller(AlumnoController::class)->group(function () {
    Route::get('alumno/bienvenida')->name('alumno.home');
    Route::get('alumno/cursos', 'mostrarCurso')->name('alumno.cursos');
    Route::get('alumno/modulos', 'mostrarModulo')->name('alumno.modulos');
    Route::get('alumno/lecciones', 'mostrarListaLeccion')->name('alumno.listaLecciones');
    Route::get('alumno/leccion', 'mostrarLeccion')->name('alumno.leccion');
});