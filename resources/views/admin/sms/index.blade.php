@extends('layouts.admin')


@section("title")
Messages
@stop

@section("heading")
Messages
@stop

@section("content")



<div class="col-lg-12">
    <table class="table">
        <thead class="thead-dark">
            <th>Sr</th>
            <th>Message</th>
            <th>Sent On</th>
            <th>Status</th>
        </thead>

        <tbody>

        @php
        $i = 1
        @endphp
            @foreach($messages as $message)
            <tr>
                <td>{{$i++}}</td>
                <td>
                    <textarea class="form-control" readonly name="" id="" cols="15" rows="5">{{$message->msg}}</textarea>
                </td>
                <td>{{$message->created_at}}</td>
                <td class="text-success">Success</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>





@stop