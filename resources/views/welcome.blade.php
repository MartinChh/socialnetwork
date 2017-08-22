@extends('layout.app')
@section('title','Home')
@section('body')
@include('includes.message')
<div class="row">
    <div class="col-md-6">
    	<form action="{{route('signup')}}" method="post">
    	<h3>Registrace</h3>
    		<div class="form-group">
    			<label for="email">Email</label>
    			<input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
    		</div>
    		<div class="form-group">
    			<label for="firstName">Jméno</label>
    			<input class="form-control" type="text" name="firstName" id="firstName" value="{{ Request::old('firstName') }}">
    		</div>
    		<div class="form-group">
    			<label for="password">Heslo</label>
    			<input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
    		</div>
    		<button type="submit" class="btn btn-primary">Registrovat</button>
    		<input type="hidden" name="_token" value="{{Session::token()}}">
    	</form>
    </div>
    <div class="col-md-6">
    	<form action="{{ route('signin')}}" method="post">
    	<h3>Přihlášení</h3>
    		<div class="form-group">
    			<label for="email">Email</label>
    			<input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
    		</div>
    		<div class="form-group">
    			<label for="password">Heslo</label>
    			<input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
    		</div>
    		<button type="submit" class="btn btn-primary">Přihlásit</button>
    		<input type="hidden" name="_token" value="{{Session::token()}}">
    	</form>
    </div>
</div>
@endsection