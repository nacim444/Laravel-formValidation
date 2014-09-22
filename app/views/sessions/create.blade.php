@extends('layouts')

@section('content')

{{Form::open(["route"=>"sessions.store","class"=>"well"])}}

<div class="form-group">
	{{Form::label("username","Username")}}
	{{Form::text("username", null,["class"=>"form-control"])}}
	{{$errors->first('username','<span class="error">:message</span>')}}

</div>

<div class="form-group">
	{{Form::label("pasword", "Password")}}
	{{Form::password("password", ["class"=>"form-control"])}}
	

</div>

<div class="form-group">
	{{Form::submit("Log in",["class"=>"btn btn-primary"])}}

</div>

{{Form::close()}}


@stop