@extends('layouts.admin')


@section("title")
Contacts
@stop

@section("heading")
Contacts
@stop

@section("content")


<div class="row" style="padding: 20px;">
    <div class="col-lg-12">
        <a href="{{route('contact.create')}}" class="btn btn-md btn-primary">Create New Contact &rarr;</a>
    </div>
</div>





<div class="col-lg-12">
    <table class="table">
        <thead class="thead-dark">
            <th>Sr</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Group Assigned</th>
            <th>Edit</th>
        </thead>

        <tbody>

        @php
        $i = 1
        @endphp
            @foreach($contacts as $contact)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->tel}}</td>
                <td>{{$contact->groupName->name}}</td>
                <td>
                    <a href="{{route('contact.edit' , $contact->id)}}" class="btn btn-md btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>





@stop