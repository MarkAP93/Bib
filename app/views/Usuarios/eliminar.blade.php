@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="jumbotron" style="text-align: center">Crear user</h1>
			
			 <!--{{ Form::open(['url'=>'/users/eliminarHandler','method'=>'get']) }}-->
			 <!--{{ Form::open(['url'=>'/users/5','method'=>'delete']) }}-->
			 {{ Form::open(['route'=>'users.destroy','method'=>'delete']) }}
			 	<div>
				 	{{ Form::label('id','ID:')}}
				 	{{ Form::input('text', 'id')}}
			 	</div>
				
			 	<div>{{Form::submit('Borrar usuario')}}</div>
			 {{ Form::close() }}
		</div>
	</div>
	@stop