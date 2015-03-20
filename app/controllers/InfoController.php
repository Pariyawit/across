<?php

class InfoController extends \BaseController {

	public function show()
	{
		$input = Input::all();
		$title = $input['hotel'];
		$info = Info::where('title', '=', $title)->first();
		return View::make('hotel',['info'=>$info]);
	}

}
