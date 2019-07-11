@extends('layouts.admin')
@section('content')
    <h1>Barang</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Type</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
        </tr>
        </thead>
        <tbody>
        @if($barang)
            @foreach($barang as $barang)
        <tr>
            <td>{{$barang->id}}</td>
            <td><img height="50" src="{{$barang->photo ? $barang->photo->file : 'No User Photo'}}" alt=""> </td>
            <td><a href="{{route('barang.edit', $barang->id)}}">{{$barang->nama}}</a></td>
            <td>{{$barang->type ==  1 ? 'Alat' : 'Bahan'}}</td>

            <td>{{$barang->harga}}</td>
            <td>{{$barang->jumlah}}</td>

        </tr>

            @endforeach

            @endif
        </tbody>
    </table>
@stop
