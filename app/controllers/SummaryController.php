<?php
#!/Python27/python

class SummaryController extends \BaseController {

	public function show()
	{
		$input = Input::all();
		$title = $input['hotel'];
		$info = Info::where('title', '=', $title)->first();
		$summary = Summary::getSummary($title);

		$scores = Average::getAverage($title);
		// return $summary;
		$summary_bold = SummaryController::boldKeyword($summary);
		// var_dump($summary);
		if($summary_bold==null){
			$summary_bold = $summary; 
		}
		return View::make('hotel',['info'=>$info, 'summary'=>$summary_bold ,'scores'=>$scores]);
	}

	public static function boldKeyword($summary){

		// $result = shell_exec('python public/script/boldkeyword.py '.escapeshellarg(json_encode($summary)) );

		$result = shell_exec('python public/script/boldkeyword.py '.(json_encode(json_encode($summary))) );
		// $result = shell_exec('python public/script/boldkeyword.py '.escapeshellarg(json_encode(json_encode($summary))) );

		return json_decode($result,true);
	}
}
