@extends('layouts.master')


@section('title')
        Lorem Ipsum Generator
@stop

@section('content')
	<p><a href='/'>Home</a></p>
        <h1>Lorem Ipsum Generator</h1>

	{!! lorem($paragraph) !!}
@stop
