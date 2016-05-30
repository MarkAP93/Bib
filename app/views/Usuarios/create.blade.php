@extends('layouts.default')

@section('content')
	<div class="row">
		<div class0"col-md-6 col-md-offset-3">
			<h1 class="jumbotron" style="text-align: center">Crear user</h1>
			
			 {{ Form::open(['route'=>'users.store']) }}
			 	<div>
				 	{{ Form::label('username','Username:')}}
				 	{{ Form::input('text', 'username')}}
			 	</div>
				 <div>
				 	{{ Form::label('password','Password:')}}
				 	{{ Form::input('password', 'password')}}
			 	</div>
			 	<div>{{Form::submit('Create User')}}</div>
			 {{ Form::close() }}
		</div>
	</div>
	@stop