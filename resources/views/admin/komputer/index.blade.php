@extends('layouts.admin')
@section('content')
    <h1>komputer</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Photo</th>
            <th scope="col">Cpu</th>
            <th scope="col">Ram</th>
            <th scope="col">Hd</th>
            <th scope="col">Kondisi</th>
        </tr>
        </thead>
        <tbody>
        @if($komputer)
            @foreach($komputer as $komputer)
        <tr>
            <td>{{$komputer->id}}</td>
            <td>{{$komputer->nama}}</td>
            <td><img height="50" src="{{$komputer->photo ? $komputer->photo->file : 'No User Photo'}}" alt=""> </td>
            
            <td>{{$komputer->cpu}}</td>
            <td>{{$komputer->ram}}</td>
            <td>{{$komputer->hd}}</td>
            <td>{{$komputer->kondisi ==  1 ? 'Rusak' : 'Baik'}}</td>



        </tr>

            @endforeach

            @endif
        </tbody>
    </table>
@stop
