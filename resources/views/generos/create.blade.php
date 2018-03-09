@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}
		
		@include('generos.forms.genre')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}
	@endsection