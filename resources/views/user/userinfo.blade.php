@extends('layouts.master')


@section('title')
        Random User Generator
@stop

@section('content')
	<p><a href='/'>Home</a></p>
        <h1>Random User Generator</h1>
	
 	<form method='POST' action='/user/create'>                                                                                              
             {{ csrf_field() }}
 	    <div class="errors">
             {{$errors->first('users') }} <br>	    
 	    </div>
              Enter number of fake users to be created (max 50): <input type='text' name='users' size='5' maxlength='2' value='{{ old('users') }}'>
             <input type='submit' value='Enter' ><br>
 	
 	@if(count($errors) > 0)
 		<div class="errors">
                 <p>Please correct errors above and try again</p>
 		</div>
         @endif
 	
         </form>	
 
 @stop
