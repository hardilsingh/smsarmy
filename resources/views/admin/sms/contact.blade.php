@extends('layouts.admin')


@section("title")
Send SMS (Selected Contacts)
@stop

@section("heading")
Send SMS (Selected Contacts)
@stop


@section("content")


{!! Form::open([

'action'=>'SMSController@store',
'method'=>'POST',

]) !!}

<div class="col-lg-12">
    <label for="">Select Contacts</label>
    <select required class="js-example-basic-multiple" style="width: 100%" name="to[]" multiple="multiple">
        @foreach($contacts as $contact)
        <option value="{{$contact->id}}">{{$contact->name}} | {{$contact->tel}}</option>
        @endforeach
    </select>
</div>


<div class="form-group" style="margin-top: 30px;">
    <label for="">Message to send</label>
    <textarea name="msg" id="" style="font-size: large;" cols="30" rows="10" class="form-control"></textarea>
</div>

<div class="row" style="padding: 30px;">
    {!! Form::submit('Send Message' , ['class'=>'btn btn-md btn-primary']) !!}
</div>

<input type="hidden" name="type" value="contact">

{!! Form::close() !!}






@stop