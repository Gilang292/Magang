@extends('layouts.admin')
@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>'LaporanController@store','files'=>true]) !!}

    <div class = "form-group">
    <h1><center>Input Laporan</center></h1>
    </div>

    <div class = "form-group">
      {!! Form::label('tanggal', 'Tanggal:') !!}
      {!! Form::date('tanggal', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
      {!! Form::label('jam', 'Jam:') !!}
      {!! Form::time('jam', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('tampat', 'Tempat:') !!}
    {!! Form::text('tempat', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    <h1><center>Identitas Pelapor</center></h1>
    </div>

    <div class = "form-group">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('skdp', 'Skpd:') !!}
    {!! Form::select('skdp', array(0 => 'Provinsi', 1 =>'Kota'), 0, ['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
    {!! Form::label('telp', 'Telp:') !!}
    {!! Form::text('telp', null, ['class'=>'form-control']) !!}
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
