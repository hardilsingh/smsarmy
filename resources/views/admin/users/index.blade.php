@extends('layouts.admin')


@section("title")
Users
@stop

@section("heading")
Users
@stop

@section("content")



<div class="col-lg-12">
    <table class="table">
        <thead class="thead-dark">
            <th>Sr</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
        </thead>

        <tbody>

        @php
        $i = 1
        @endphp
            @foreach($users as $user)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>Admin</td>
                <td>
                    <a href="{{route('user.edit' , $user->id)}}" class="btn btn-md btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>





@stop