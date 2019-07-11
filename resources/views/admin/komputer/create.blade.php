@extends('layouts.admin')
@section('content')
    <h1>Create Komputer</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminKomputersController@store','files'=>true]) !!}

    <div class = "form-group">
    {!! Form::label('nama', 'Nama:') !!}
    {{ Form::text('nama', null, ['class'=>'form-control']) }}
    </div>

    <div class = "form-group">
    {!! Form::label('photo_id', 'Photo:') !!}
     {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

    </div>

    <div class = "form-group">
    {!! Form::label('cpu', 'Cpu:') !!}
    {!! Form::text('cpu', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('ram', 'Ram:') !!}
    {!! Form::text('ram', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('hd', 'Hd:') !!}
    {!! Form::text('hd', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('kondisi', 'Kondisi:') !!}
    {!! Form::select('kondisi', array(0 => 'Rusak', 1 =>'Baik'), 0, ['class'=>'form-control']) !!}


    <!-- <div class = "form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
    </div> -->

    <div class = "form-group">
    {!! Form::submit('Create Komputer', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('includes.form-error')


@stop
