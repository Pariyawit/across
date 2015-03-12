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

		$summary = SummaryController::boldKeyword($summary);
		return View::make('hotel',['info'=>$info, 'summary'=>$summary ,'scores'=>$scores]);
	}

	public static function boldKeyword($summary){

		// $result = shell_exec('python public/script/boldkeyword.py '.escapeshellarg(json_encode($summary)) );
		$output = [];
		foreach ($summary as $topic) {
			$key = array_keys($summary,$topic);
			$key = $key[0];
			$output[$key] = array();
			foreach ($topic as $sentence) {
				$result = shell_exec('python public/script/boldkeyword.py '.$key.' '.escapeshellarg(json_encode($sentence)) );
				// var_dump($result);
				array_push($output[$key],$result);
			}
		}
		var_dump($output);
		return $output;
	}
}
