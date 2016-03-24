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
	
	#@foreach($users as $user)
	
	$faker = \Faker\Factory::create();
#	echo $faker->name;
	#$fakername = $faker->name;

	return view('user.createuser')
		->with('users', $request->input('users'))
#		->with('fakername', $fakername);
		->with('faker', $faker);
    }

}
