<?php

class SummaryController extends \BaseController {

	public function show()
	{
		$input = Input::all();
		$title = $input['hotel'];
		$info = Info::where('title', '=', $title)->first();
		$summary = Summary::getSummary($title);

		$scores = Average::getAverage($title);

		return View::make('hotel',['info'=>$info, 'summary'=>$summary ,'scores'=>$scores]);
	}
}
