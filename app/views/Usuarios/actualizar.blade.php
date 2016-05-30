@extends('layouts.default')

@section('content')
	<div class="row">
		<div class0"col-md-6 col-md-offset-3">
			<h1 class="jumbotron" style="text-align: center">Actualizar</h1>
			

    		{{ Form::open(['route'=>'users.update','method'=>'put']) }}
    			<div>
				 	{{ Form::label('id','ID:')}}
				 	{{ Form::input('text', 'id')}}
			 	</div>
			 	<div>
				 	{{ Form::label('username','Username:')}}
				 	{{ Form::input('text', 'username')}}
			 	</div>

			 	<div>{{Form::submit('Actualizar')}}</div>
			 {{ Form::close() }}

		</div>
	</div>
	@stop