<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller {

    /**
    * Responds to requests to GET /user
    */
    public function getUserInfo() {
        #return 'Page to get user info';
	$faker = create();
	echo $faker->name;
	return view('user.userinfo') ;
		#with->('faker', $faker);
	
    }


}
