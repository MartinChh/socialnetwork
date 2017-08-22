@extends('layout.app')
@section('body')
	<section class="new-post">
		<div class="col-md-6">
			<header><h3>{{strtoupper('test')}}</h3></header>
			<form action="{{ route('post.create') }}" method="post">
				<div class="form-group">
					<textarea  name="body" id="new-post" cols="60" rows="5" placeholder="Co chcete sdílet?"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Sdílet</div>
				<input type="hidden" value="{{ Session::token() }}" name="_token">
				<br />
			</form>
			@include('includes.message')
		</div>
	</section>
	<br />
	<section class="posts">
		<div class="col-sm-6 col-sm-offset-3">
			@foreach($posts as $post)
			<article class="post">
			<div class="info">
				Sdílel {{ $post->user->firstName }} {{$post->created_at->diffForHumans()}}
			</div>
			<p align="left">{{$post->body}}</p>
			
			<div class="interaction">
				<a href="#">Like</a>|
				<a href="#">Dislike</a>|
				<a href="#">Upravit</a>|
				<a href="#">Vymazat</a>
			</div>
			</article>
			@endforeach
		</div>
	</section>
@endsection