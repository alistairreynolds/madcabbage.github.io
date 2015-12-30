@extends('app')

@section('header')
{!! ucfirst($film->name) !!}
@stop

@section('content')
	<p>Released: {{ $film->released }}</p>
	<p>{{ $film->summary_full }}</p>
	<p><a target="_blank" href="{{ $film->watch }}">Watch Now</a></p>

	@unless($film->genres->isEmpty())
		<h5>Genres</h5>
		<ul>
		@foreach($film->genres as $genre)
			<a href="{{ url('genres/'.$genre->name) }}">
				<li>{{ $genre->name }}</li>
			</a>
		@endforeach
		</ul>
	@endunless

	<div>
		<iframe width="560" height="315" src="{{ $film->trailer }}" frameborder="0" allowfullscreen></iframe>
	</div>
@stop