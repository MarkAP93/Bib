@extends('layouts.default')

@section('content')
	<div class="row">
		<div class0"col-md-6 col-md-offset-3">
			<h1 class="jumbotron" style="text-align: center">Users</h1>
			

    			Nombre = {{$users->username}}<br>
    			Password = {{$users->password}} 

		</div>
	</div>
	@stop