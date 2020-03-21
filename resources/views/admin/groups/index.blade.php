@extends('layouts.admin')


@section("title")
Groups
@stop

@section("heading")
Groups
@stop

@section("content")



{!! Form::open([

'action'=>'GroupController@store',
'method'=>'POST',
'class'=>'form-horizontal'

]) !!}
<div class="col-lg-12">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="">Group Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Group Name">
        </div>
    </div>

</div>


<input type="hidden" name="created_by" value="{{Auth::user()->id}}">


<div class="col-lg-12">
    <div class="col-lg-4">
        {!! Form::submit("Update" , ['class'=>'btn btn-md btn-success']) !!}
    </div>
</div>


{!! Form::close() !!}


<div class="col-lg-12" style="margin-top: 20px;">
    <table class="table">
        <thead class="thead-dark">
            <th>Sr</th>
            <th>Name</th>
            <th>Created By</th>
            <th>Edit</th>
        </thead>

        <tbody>

        @php
        $i = 1
        @endphp
            @foreach($groups as $group)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$group->name}}</td>
                <td>{{$group->userName->name}}</td>
                <td>
                    <a href="{{route('group.edit' , $group->id)}}" class="btn btn-md btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>





@stop