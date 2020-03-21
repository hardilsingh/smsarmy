@extends('layouts.admin')


@section("title")
Create Contact
@stop

@section("heading")
Create Contact
@stop

@section("content")

{!! Form::open([

'action'=>'ContactController@store',
'method'=>'POST',
'class'=>'form-horizontal'

]) !!}
<div class="col-lg-12">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" required id="" class="form-control" placeholder="Enter Name">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="">Contact Number</label>
            <input type="tel" name="tel" id="" required minlength="10" maxlength="10" class="form-control" placeholder="Enter Number">
        </div>
    </div>
    <hr class="hr">


    <input type="file" name="select_file" id="">

    <hr class="hr">

    <div class="col-lg-4">
        <div class="form-group">
            <label for="">Group</label>
            {!! Form::select('group_id' , $groups , 0 , ['class'=>'form-control' , 'placeholder'=>'Select a Group']) !!}
        </div>
    </div>


    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
</div>


<div class="col-lg-12">
    <div class="col-lg-4">
        {!! Form::submit("Update" , ['class'=>'btn btn-md btn-success']) !!}
    </div>
</div>


{!! Form::close() !!}




@stop
