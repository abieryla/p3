@extends('layouts.master')

@section('title')
	Random User Generator
@stop

@section('content')
	<p><a href='/'>Home</a></p>
	<h1>Random User Generator</h1>

	@for ($i = 0; $i < $users; $i++)
		{{ $fakernames[$i] }}<br>
	@endfor
@stop

