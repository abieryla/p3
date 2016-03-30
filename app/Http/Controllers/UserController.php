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
	$email = null;
	$address = null;
	if (isset($_GET["email"])) {
		$email=1;
	}
	elseif (isset($_GET["address"])) {
		$address=1;
	}
	return view('user.userinfo') 
		->with('users', $users)
		->with('email', $email)
		->with('address', $address);
	
    }

    public function postCreate(Request $request) {
	
	$this->validate($request,[
		'users' => 'required|max:50|min:1|numeric',
	]);

	/** arrays to store names, emails and addresses **/
	$fakernames = [];	
	$fakeraddress = [];	
	$fakeremails = [];	
	
	/** Get user input requests **/
	$numusers = $request->input('users');
	$email= $request->input('email');
	$address = $request->input('address');

	/** Store fake info in arrays	**/
	for($i = 0; $i < $numusers; $i++) {	
		$faker = \Faker\Factory::create();
		$fakernames[$i] = $faker->name;
		$fakeraddress[$i] = $faker->address;
		$fakeremails[$i] = $faker->email;
	}

	/** returns fake user view **/
	return view('user.createuser')
		->with('users', $request->input('users'))
		->with('fakernames', $fakernames)
		->with('fakeraddress',$fakeraddress)
		->with('fakeremails',$fakeremails)
		->with('address', $address)
		->with('email', $email);

    }

}
