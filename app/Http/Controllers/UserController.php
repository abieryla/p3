<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
    * Responds to requests to GET /user
    */
    public function getCreateUser() {
        return 'Page to get user info';
	#return view('user.createUser');
    }


}
