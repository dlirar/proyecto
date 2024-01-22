
@extends('layouts.plantilla')

@section('links')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('title','Inicio de sesión')

@section('content')

<div class="login_container">
  <form onSubmit={handleLogin}>
    <div>
      <label>Usuario:</label>
      <input
        type="text"
        
      />
    </div>
    <div>
      <label>Contraseña:</label>
      <input
        type="password"
      
      />
    </div>
    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
  </form>

</div>


@endsection