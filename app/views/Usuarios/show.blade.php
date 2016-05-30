@extends('layouts.default')

@section('content')
	<div class="row">
		<div class0"col-md-6 col-md-offset-3">
			<h1 class="jumbotron" style="text-align: center">Users</h1>
			
			 <table class="table">
    			<thead>
			      <tr>
				   <th>Nombre</th>
				   <th>Password</th>
				   <th>Id</th>
			      </tr>
			     </thead>
			      <tbody>
			      	@foreach($users as $user)
			      	<tr>
					<td>
					 {{$user->username}} 
					</td>
					<td>
					 {{$user->password}} 
					<!--<li class="list-group-item"> {{$user->password}} </li>-->
					</td>
					<td>
					 {{$user->id}} 
					<!--<li class="list-group-item"> {{$user->password}} </li>-->
					</td>
					</tr>
					@endforeach
			      </tbody>
			
    
    </table>
		</div>
	</div>
	@stop