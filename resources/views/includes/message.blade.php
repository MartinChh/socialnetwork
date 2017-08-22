@if(count($errors)>0)
	<div align="center">
		<div class="col-md-2 col-md-offset-4">
			<ul class="list-group">
				@foreach($errors->all() as $error)
					<li class="list-group-item list-group-item-danger">{{$error}}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif
@if(Session::has('message'))
	<div align="center">
		<div class="col-md-2 col-md-offset-4 alert alert-success">
			{{Session::get('message')}}
		</div>
	</div>
@endif