@extends('app')

@section('header')
	Add a film
@stop

@section('content')
	{!! Form::model($film = new \App\Film(), ['method' => 'POST', 'action' => 'FilmsController@store']) !!}

	//{!! Form::open(['url' => 'films']) !!}

		@include('films._form', ['submitButtonText' => 'Add Film']);

	{!! Form::close() !!}
@stop

@include('errors.list')