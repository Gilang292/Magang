@extends('layouts.admin')
@section('content')
    <h1>Data Permasalahan</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Permasalahan</th>

        </tr>
        </thead>
        <tbody>
        @if($permasalahan)
            @foreach($permasalahan as $permasalahan)
        <tr>

            <td>{{$permasalahan->id}}</td>
            <td>{{$permasalahan->keterangan}}</td>
            <td>{{$permasalahan->permasalahan}}</td>

        </tr>

            @endforeach
            @endif
        </tbody>
    </table>
@stop
