<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
#require_once '/Faker/Factory/autoload.php';
use faker;


class UserController extends Controller {

    /**
    * Responds to requests to GET /user
    */
    public function getUserInfo() {
	$users = null;
	#$faker = create();
	#echo $faker->name;
	return view('user.userinfo') 
		->with('users', $users);
	
    }

    public function postCreate(Request $request) {
	
	$this->validate($request,[
		'users' => 'required|max:50|min:1|numeric',
	]);

	return view('user.create')
		->with('users', $request->input('users'));
    }

}
