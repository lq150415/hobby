@extends('layouts.app')
@section('title')
  Inicio
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-light">Inicio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido! A continuacion las tareas que puede realizar
                    <br>
                    <br>
                    <div class="row">
                      <div class="card col-md-6 bg-primary text-light">
                        <div class="card-block">
                          <br>
                          <h4 class="card-title">Registrar Productos</h4>
                          <p class="card-text">En esta seccion puede registrar productos</p><br>
                          <a href="#" class="btn btn-info">Registro de productos</a>
                        </div>
                      </div>
                      <div class="card col-md-6 bg-danger text-light">
                        <br>
                        <div class="card-block">
                          <h4 class="card-title">Registrar usuarios</h4>
                          <p class="card-text">En esta seccion se pueden registrar usuarios nuevos para el registro de productos.</p>
                          <a href="#" class="btn btn-primary">Registro de usuarios</a><br><br>
                        </div>
                      </div>
                      </div>
                      <br>
                      <div class="row">
                      <div class="card col-md-6 bg-warning text-light">
                        <br>
                        <div class="card-block">
                          <h4 class="card-title">Mensajes</h4>
                          <p class="card-text">En esta seccion se informara de los mensajes que recibio.</p>
                          <a href="#" class="btn btn-light">Leer mensajes</a>
                        </div>
                      </div>
                      <div class="card col-md-6 bg-dark text-light">
                        <br>
                        <div class="card-block">
                          <h4 class="card-title">Ventas</h4>
                          <p class="card-text">En esta seccion puede registrar las ventas que se realizan.</p>
                          <a href="#" class="btn btn-primary">Registrar ventas</a><br><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
