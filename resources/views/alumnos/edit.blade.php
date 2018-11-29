@extends('layouts.admi')

@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 alumno
                </div>

                <div class="panel-body">
                 {!! Form::model($alumno, ['route' => ['alumnos.update', $alumno->id],
                 'method' =>'PUT'])  !!}
                  
                 @include('alumnos.partials.form')

                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
