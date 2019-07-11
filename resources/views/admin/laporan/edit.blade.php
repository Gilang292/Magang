@extends('layouts.admin')
@section('content')
    <h1>Edit Users</h1>
<div class="row">
  @if($users)
      @foreach($users as $user)
    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : 'https://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


    </div>

    <div class="col-sm-8">
    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type') !!}
        {!! Form::email('type',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('harga') !!}
        {!! Form::select('harga', $roles ,null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('jumlah') !!}
        {!! Form::select('jumlah',array(1=>'Active', 0=> 'Not Active'),null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
    </div>
    

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    </div>

</div>
    <div class="row">
    @include('includes.form-error')
    </div>
@stop
