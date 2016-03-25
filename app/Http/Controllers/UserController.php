<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller {

    /**
    * Responds to requests to GET /user
    */
    public function getUserInfo() {
	$users = null;
	return view('user.userinfo') 
		->with('users', $users);
	
    }

    public function postCreate(Request $request) {
	
	$this->validate($request,[
		'users' => 'required|max:50|min:1|numeric',
	]);


	$fakernames = [];	
	#@foreach($users as $user)
	$numusers = $request->input('users');
	for($i = 0; $i < $numusers; $i++) {	
		$faker = \Faker\Factory::create();
		$fakernames[$i] = $faker->name;
	}

	return view('user.createuser')
		->with('users', $request->input('users'))
#		->with('fakername', $fakername);
#		->with('faker', $faker);
		->with('fakernames', $fakernames);
    }

}
