@extends('layouts.master')

@section('title')
	Random User Generator
@stop

@section('content')
	<p><a href='/'>Home</a></p>
	<h1>Random User Generator</h1>
	
	{{ $faker->name }}
@stop

