@extends('layouts.admin')


@section("title")
Send SMS (ALL)
@stop

@section("heading")
Send SMS (ALL)
@stop

@section("content")


<div class="row">
    <div class="col-lg-12">
        <p>
            <h3><u>Total number of contacts selected <b>{{$contacts}}</b></u></h3>
        </p>
    </div>
</div>


{!! Form::open([

    'action'=>'SMSController@store',
    'method'=>'POST',

]) !!}



<div class="form-group">
    <label for="">Message to send</label>
    <textarea name="msg" id="" style="font-size: large;" cols="30" rows="10" class="form-control"></textarea>
</div>

<div class="row" style="padding: 30px;">
    {!! Form::submit('Send Message' , ['class'=>'btn btn-md btn-primary']) !!}
</div>


<input type="hidden" name="type" value="all">


{!! Form::close() !!}






@stop
