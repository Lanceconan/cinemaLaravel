@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	{!!Form::model($user, ['route'=>['usuario.update', $user->id], 'method'=>'PUT'])!!}
	
		@include('usuario.forms.user')
	
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}	

	@endsection