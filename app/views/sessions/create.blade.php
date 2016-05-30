@extends('layouts.default')

@section('content')
	<div class="row">
		<div class0"col-md-6 col-md-offset-3">
			<h1 class="jumbotron" style="text-align: center">Log in</h1>
			
			 {{ Form::open(['route'=>'sessions.store']) }}
			 	<div>
				 	{{ Form::label('id','id:')}}
				 	{{ Form::input('text', 'id')}}
			 	</div>
				 <div>
				 	{{ Form::label('password','Password:')}}
				 	{{ Form::input('password', 'password')}}
			 	</div>
			 	<div>{{Form::submit('login')}}</div>
			 {{ Form::close() }}
		</div>
	</div>
	@stop