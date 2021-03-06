@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 rango
                </div>

                <div class="panel-body">
                  <p><strong>Nombre</strong> {{ $rango->nombre }}</p>
                  <p><strong>Duracion</strong> {{ $rango->duracion }}</p>
                  <p><strong>Fecha Inicio</strong> {{ $rango->fechaInicio }}</p>
                  <p><strong>FechaFinal</strong> {{ $rango->fechaFinal }}</p>
                  <p><strong>Periodo</strong> {{ $rango->periodo->nombre }}</p>
                  
                </div>

                <div class="card-footer">
                       
                        
                        <a href="{{ route('rangos.indexCursos', $cursos->id) }}" 
                            class="btn btn-sm btn-lg" >cursos</a>
                        <a href="{{ route('rangos.indexAlumnos', $alumnos->id) }}" 
                            class="btn btn-sm btn-lg" >alumnos</a>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection