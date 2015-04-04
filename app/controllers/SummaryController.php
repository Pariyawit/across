<?php
#!/Python27/python

class SummaryController extends \BaseController {

	public function show()
	{
		$input = Input::all();
		$title = $input['hotel'];
		// $info = Info::where('title', '=', $title)->first();
		$info = Average::getInfo($title);
		$summary = Summary::getSummary($title);

		$scores = Average::getAverage($title);
		// return $summary;
		$summary_bold = SummaryController::boldKeyword($summary);
		// var_dump($summary);
		if($summary_bold==null){
			$summary_bold = $summary; 
		}

		$cnt = 0;
		$reviews = $summary_bold;
		foreach ($summary_bold as $key=>$sumamary_bold_topic) {
			// foreach ($key as $topic) {
			$topic = $key;
				for($i=0; $i < 5 ; $i=$i+1){
					$a = $summary[$topic][$i];
					$b = $summary_bold[$topic][$i];
					$c = Review::getFullReview($title,$summary[$topic][$i]);
					$d = $topic.'-'.$i;
					$reviews[$topic][$i] = array(
						'review' => $a,
						'bold' => $b,
						'full' => $c,
						'id' => $d
						);
				}
		}


		// $fullreview = [];
		// foreach ($summary as $topic) {
		// 	foreach ($topic as $sentence) {
		// 		$tmp = Review::getFullReview($title,$sentence);
		// 		$fullreview[$sentence] = $tmp;
		// 	}
		// }

		// var_dump($fullreview);
		// return View::make('hotel',['info'=>$info, 'summary'=>$summary_bold ,'scores'=>$scores, 'fullreview'=>$fullreview]);
		return View::make('hotel',['info'=>$info, 'summary'=>$reviews ,'scores'=>$scores]);
		// return View::make('hotel',['info'=>$info, 'summary'=>$summary ,'scores'=>$scores, 'fullreview'=>$fullreview]);
	}

	public static function boldKeyword($summary){

		// $result = shell_exec('python public/script/boldkeyword.py '.escapeshellarg(json_encode($summary)) );

		$result = shell_exec('python public/script/boldkeyword.py '.(json_encode(json_encode($summary))) );
		// $result = shell_exec('python public/script/boldkeyword.py '.escapeshellarg(json_encode(json_encode($summary))) );

		return json_decode($result,true);
	}
}
