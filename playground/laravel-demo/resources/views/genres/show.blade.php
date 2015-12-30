@extends('app')

@section('header')
    {{ $genre->name }} Films
    <a href="{{ url('films/create') }}"><span class="glyphicon glyphicon-plus"></span></a>
@stop

@section('content')

    <div class="row">

        @foreach ($films as $film)

            <a href="{{ url('films', $film->id) }}">
                <div class="col-sm-3">
                    <h4>{{ $film->name}}</h4>
                    <img class="img-responsive" als="{{ $film->name }}" src="/images/films/{{ $film->image }}">
                    <em><caption>{{ $film->summary }}</caption></em>
                </div>

            </a>

        @endforeach

    </div>

@stop