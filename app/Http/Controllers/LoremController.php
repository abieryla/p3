<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use lorem;

class LoremController extends Controller {

    /**
    * Responds to requests to GET /user
    */
    public function getLoremInfo() {
#        return 'Page to get Lorem info';
	$paragraph = null;
	return view('lorem.loreminfo')
		->with('paragraph', $paragraph);
    }

   public function postCreate(Request $request) {

	$this->validate($request,[
		'paragraph' => 'required|max:10|min:1|numeric',
	]);
	return view('lorem.create')
		->with('paragraph', $request->input('paragraph'));
   }


}
