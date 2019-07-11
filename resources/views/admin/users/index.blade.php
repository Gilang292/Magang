@extends('layouts.admin')
@section('content')
    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo ? $user->photo->file : 'No User Photo'}}" alt=""> </td>
            <td>{{$user->name}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active ==  1 ? 'Active' : 'Not Active'}}</td>

            <td>{{$user->email}}</td>

            <td>{{$user->created_at->diffForHumans()}}</td>

            <td>{{$user->updated_at->diffForHumans()}}</td>

        </tr>

            @endforeach

            @endif
        </tbody>
    </table>
@stop
