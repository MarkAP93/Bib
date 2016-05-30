@extends('layouts.default')

@section('content')
	<div class="row">
		<div class0"col-md-6 col-md-offset-3">
			<h1 class="jumbotron" style="text-align: center">Libros</h1>
			 
			    <!--<table class="table">
    			<thead>
			      <tr>
				   <th>Nombre</th>
			
				   <th>Id</th>
			      </tr>
			     </thead>
			      <tbody>
			      	@foreach($libros as $libro)
			      	<tr>
					<td>
					 {{$libro->Nombre}} 
					</td>
			
					<td>
					 {{$libro->id}} 
				
					</td>
					</tr>
					@endforeach
			      </tbody>
			
    
    </table>-->
    <table class="table">
    <thead>
    <tr>
    <td>nombre</td>
    <td>id</td>
    </tr>
	</thead>
	<tbody>
    @foreach($libros as $libro)
    <tr>
    	<td>
    	{{$libro->Nombre}} 
    	</td>
    	<td>
    	{{$libro->id}} 
    	</td>
    </tr>
	@endforeach
			</tbody>   
			   </table>
		</div>
	</div>
	@stop