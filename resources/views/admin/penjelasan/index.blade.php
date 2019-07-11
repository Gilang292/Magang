@extends('layouts.admin')
@section('content')

    <div class = "form-group">
    <h1>Data Penjelasan</h1>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Petugas</th>
            <th scope="col">Keterangan</th>

        </tr>
        </thead>
        <tbody>
        @if($penjelasan)
            @foreach($penjelasan as $penjelasan)
        <tr>
            <td>{{$penjelasan->id}}</td>
            <td>{{$penjelasan->tanggal}}</td>
            <td>{{$penjelasan->jam}}</td>
            <td>{{$penjelasan->petugas}}</td>
            <td>{{$penjelasan->keterangan}}</td>
        </tr>

            @endforeach

            @endif
        </tbody>
    </table>
@stop
