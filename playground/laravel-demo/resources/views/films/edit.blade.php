@extends('app')

@section('header')
    Edit film {!! $film->name !!}
@stop

@section('content')


    {!! Form::model($film, ['method' => 'PATCH', 'action' => ['FilmsController@update', $film->id]]) !!}

     @include('films._form', ['submitButtonText' => 'Update Film']);

    {!! Form::close() !!}


@stop

@include('errors.list')