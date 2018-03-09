@extends('layouts.admin')

<?php $message = Session::get('message')?>

@include('alerts.success')

@section('content')

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operaciones</th>
		</thead>

		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!!Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])!!}					
					{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']); !!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}							
			</td>
		</tbody>
		@endforeach
			
	</table>

	{!!$users->render()!!}


@endsection