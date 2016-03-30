@extends('layouts.master')

@section('title')
	Random User Generator
@stop

@section('content')
	<p><a href='/'>Home</a></p>
	<h1>Random User Generator</h1>

	@for ($i = 0; $i < $users; $i++)
		{{ $fakernames[$i] }}<br>
		@if ($address == 'on')
			{{ $fakeraddress[$i] }}<br>
		@endif
		@if ($email == 'on')
			{{ $fakeremails[$i] }}<br>
		@endif
		<br>
	@endfor
@stop

