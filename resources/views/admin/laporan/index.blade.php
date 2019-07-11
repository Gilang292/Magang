@extends('layouts.admin')
@section('content')
    <h1>laporan</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Tempat</th>
            <th scope="col">Nama</th>
            <th scope="col">Skpd</th>
            <th scope="col">Telp</th>
        </tr>
        </thead>
        <tbody>
        @if($laporan)
            @foreach($laporan as $laporan)
        <tr>
            <td>{{$laporan->id}}</td>
            <td>{{$laporan->tanggal}}</td>
            <td>{{$laporan->jam}}</td>
            <td>{{$laporan->tempat}}</td>
            <td>{{$laporan->nama}}</td>
            <td>{{$laporan->skpd ==  1 ? 'Kota' : 'Provinsi'}}</td>
            <td>{{$laporan->telp}}</td>

        </tr>

            @endforeach

            @endif
        </tbody>
    </table>
@stop
