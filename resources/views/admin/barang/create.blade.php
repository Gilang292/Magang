@extends('layouts.admin')
@section('content')
    <h1>Create Barang</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminBarangsController@store','files'=>true]) !!}
    <div class = "form-group">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('type', 'Tipe:') !!}
    {!! Form::select('type', array(0 => 'Alat', 1 =>'Bahan'), 0, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::text('harga', null, ['class'=>'form-control']) !!}
    </div>


    <div class = "form-group">
    {!! Form::label('jumlah', 'Jumlah:') !!}
    {!! Form::text('jumlah', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('photo_id', 'Photo:') !!}
    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <!-- <div class = "form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
    </div> -->

    <div class = "form-group">
    {!! Form::submit('Create Barang', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form-error')


@stop
