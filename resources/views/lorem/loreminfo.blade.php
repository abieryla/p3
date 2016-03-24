@extends('layouts.master')


@section('title')
        Lorem Ipsum Generator
@stop

@section('content')
	<p><a href='/'>Home</a></p>
        <h1>Lorem Ipsum Generator</h1>
	<form method='POST' action='/lorem/create'>
            {{ csrf_field() }}
	    <div class="errors">
            {{$errors->first('paragraph') }} <br>	    
	    </div>
             Enter number of paragraphs (max 10): <input type='text' name='paragraph' size='5' maxlength='2' value='{{ old('paragraph') }}'>
            <input type='submit' value='Enter' ><br>
	
	@if(count($errors) > 0)
		<div class="errors">
                <p>Please correct errors above and try again</p>
		</div>
        @endif
	
        </form>	

@stop
