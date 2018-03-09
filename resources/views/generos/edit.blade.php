@extends('layouts.admin')
	@section('content')
	{!!Form::model($genre, ['route'=>['genero.update', $genre->id], 'method'=>'PUT'])!!}
	
		@include('generos.forms.genre')
	
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}	

	@endsection