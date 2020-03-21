@extends('layouts.admin')


@section("title")
Edit Group
@stop

@section("heading")
Edit Group
@stop

@section("content")

{!! Form::model($group , [

'action'=>['GroupController@update' ,$group->id],
'method'=>'PATCH',
'class'=>'form-horizontal'

]) !!}
<div class="col-lg-12">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Group Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{$group->name}}">
        </div>
    </div>
</div>


<div class="col-lg-12">
    <div class="col-lg-4">
        {!! Form::submit("Update" , ['class'=>'btn btn-md btn-success']) !!}
    </div>
</div>


{!! Form::close() !!}




@stop
