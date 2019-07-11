@extends('layouts.admin')
@section('content')

    <div class = "form-group">
    <h1><center>Input Penjelasan</center></h1>
    </div>

    {!! Form::open(['method'=>'POST', 'action'=>'PenjelasanController@store','files'=>true]) !!}

    <div class = "form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('jam', 'Jam:') !!}
    {!! Form::time('jam', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('petugas', 'Petugas:') !!}
    {!! Form::text('petugas', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class'=>'form-control']) !!}
    </div>


    <!-- <div class = "form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
    </div> -->

    <div class = "form-group">
    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('includes.form-error')


@stop
