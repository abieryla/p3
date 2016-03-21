<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use lorem;

class LoremController extends Controller {

    /**
    * Responds to requests to GET /user
    */
    public function getIndex() {
        return 'Page to get Lorem info';
#	$generateText = new lorem(2);
#	return $generateText;
	return view('lorem.index');
    }


}
