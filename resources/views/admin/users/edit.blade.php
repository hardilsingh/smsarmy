@extends('layouts.admin')


@section("title")
Edit User
@stop

@section("heading")
Edit User
@stop

@section("content")

{!! Form::model($user , [

'action'=>['UserController@update' ,$user->id],
'method'=>'PATCH',
'class'=>'form-horizontal'

]) !!}
<div class="col-lg-12">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{$user->name}}">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" value="{{$user->email}}">
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
