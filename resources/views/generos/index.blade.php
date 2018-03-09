@extends('layouts.admin')

<?php $message = Session::get('message')?>

@if(Session::has('message'))
	
	<div class="alert alert-success alert-dismissible" role="alert">	 
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;
	    </span>
	  </button>
	 <strong> {{Session::get('message')}}</strong>
	</div>

@endif

@section('content')

	<table class="table">
		<thead>
			<th>Nombre</th>			
			<th>Operaciones</th>
		</thead>

		@foreach($genres as $genre)
		<tbody>			
			<td>{{$genre->genre}}</td>
			<td>
				{!!Form::open(['route'=>['genero.destroy', $genre->id], 'method'=>'DELETE'])!!}					
					{!!link_to_route('genero.edit', $title = 'Editar', $parameters = $genre->id, $attributes = ['class'=>'btn btn-primary']); !!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}						
			</td>
		</tbody>
		@endforeach
			
	</table>


@endsection