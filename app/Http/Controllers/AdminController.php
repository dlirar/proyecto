<?php

namespace App\Http\Controllers;

use App\Http\Requests\guardarSucursal;
use App\Http\Requests\guardarCurso;
use App\Http\Requests\guardarLeccion;
use App\Models\Sucursal;
use App\Models\Curso;
use App\Models\Leccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use FFMpeg\Format\Video\X264;
 
class AdminController extends Controller
{

    public function bienvenida(){
        return view('administradorGeneral.bienvenida');
    }

    public function mostrarAlumno(){
        return view('administradorGeneral.mostrarAlumno');

    }
    public function editarAlumno(){
        //
    }

    //Métodos de Curso
    public function mostrarCurso(Curso $cursos){
        $cursos = Curso::orderBy('idCurso','desc')->get();
        
        return view('administradorGeneral.mostrarCurso', compact('cursos'));
    }

    public function guardarCurso(){
        return view('administradorGeneral.guardarCurso');
    }

    public function guardarDatosCurso(guardarCurso $request){
        $curso = new Curso();
        $curso->nombreCurso = $request->nombreCurso;
        $curso->descripcion = $request->descripcion;
        $imagen = $request->file('imagenCursoRuta')->store('public/imagenes');
        $url = Storage::url($imagen);
        $curso->imagenCursoRuta = $url;

        $curso->save();
        return redirect()->route('admin.showCurso');
    }

    public function editarCurso(Curso $curso){
        return view('administradorGeneral.editarCurso', compact('curso'));
    }

    public function actualizarDatosCurso(Request $request, Curso $curso){
        $curso->nombreCurso = $request->nombreCurso;
        $curso->descripcion = $request->descripcion;
        $curso->imagenCursoRuta = $request->imagenCursoRuta;

        return redirect('admin.showCurso',$curso->idCurso)->with('status', 'se han modificado los datos del curso con éxito');
    }
    //Métodos para los módulos de cada curso
    public function mostrarModulo(){
        return view('administradorGeneral.mostrarModulo');
    }

    public function guardarModulo(){
        return view('administradorGeneral.guardarModulo');
    }

    public function editarModulo(){
        return view('administradorGeneral.editarModulo');
    }

    //Métodos para las lecciones de cada módulo
    public function mostrarLeccion(Leccion $lecciones){
        $lecciones = Leccion::orderBy('idLeccion','desc')->get();
        
        return view('administradorGeneral.mostrarLeccion', compact('lecciones'));
    }

    public function guardarLeccion(){
        return view('administradorGeneral.guardarLeccion');
    }

    public function guardarDatosLeccion(Leccion $leccion, Request $request){
        $video = $request->file('videoLeccionRuta');
        $nombreVideo = $video->getClientOriginalName();
        $nombreVideoOriginal = time(). '.' . $video->getClientOriginalExtension();
        $video->move(storage_path('app/public/videos/original'),$nombreVideoOriginal);
        $nombreVideoComprimido = 'compressed_'. $nombreVideoOriginal;

        FFMpeg::fromDisk('public')
        ->open('videos/original/' . $nombreVideoOriginal)
        ->export()
        ->toDisk('public')
        ->inFormat(new X264('aac', 'libx264'))
        ->save('videos/compressed/' . $nombreVideoComprimido);

        $leccion->nombreLeccion = $request->nombreLeccion;
        $leccion->descripcion = $request->descripcion;
        $leccion->nombreVideo = $nombreVideo;
        $leccion->videoLeccionRuta = 'videos/compressed/' . $nombreVideoComprimido;
        $leccion->save();
        return redirect()->route('admin.showLeccion')->with('status','Video comprimido y guardado con éxito');
        
    }
    

    //Métodos para cada grupo
    public function mostrarGrupo(){
        return view('administradorGeneral.mostrarGrupo');
    }
    
    public function mostrarPerfil(){
        return view('administradorGeneral.mostrarPerfil');
    }

    public function mostrarProfesor(){
        return view('administradorGeneral.mostrarProfesor');
    }



    //Métodos de sucursal
    public function mostrarSucursal(){
        $sucursales = Sucursal::orderBy('idSucursal','desc')->get();
        
        return view('administradorGeneral.mostrarSucursal', compact('sucursales'));        
    }

    public function guardarSucursal(){
        return view('administradorGeneral.guardarSucursal');
    }
    
    public function guardarDatosSucursal(guardarSucursal $request){
        //Recibir los datos del formulario
        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->save();

        return redirect()->route('admin.showSucursal', $sucursal->idSucursal)->with('status','Sucursal ingresada con éxito');
    }
    
    public function editarSucursal(Sucursal $sucursal){
        
        return view('administradorGeneral.editarSucursal', compact('sucursal'));
    }

    public function actualizarDatosSucursal(Request $request, Sucursal $sucursal){
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;

        $sucursal->save();
        return redirect()->route("admin.showSucursal",$sucursal->idSucursal)->with('status','Se ha modificado la información');
    }

    public function eliminarSucursal(Sucursal $sucursal){
        $sucursal->delete();
        return redirect()->route("admin.showSucursal")->with('status','Se ha eliminado la sucursal');
    }
}