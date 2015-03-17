<?php

class AverageCopy extends Moloquent{

	protected $table = 'avg_total_score_copy';

	public static function getAverageTotalRating($title){
		$tmp = DB::collection('avg_total_score_copy')->where('_id','=',$title)->first();
		return $tmp['value']['total_score'];
	}

	// public static function getAverage($title){
	// 	$tmp = DB::collection('avg_total_score')->where('_id','=',$title)->first();
	// 	return $tmp['value'];
	// }

	public static function getSearchs($searchs){
		$hotels = [];
		$searchs = explode(' ', $searchs);

		foreach ($searchs as $search) {
			// var_dump($search);
			$query = AverageCopy::getSearchWord($search);
			// var_dump($query);
			foreach ($query as $q) {
				$title = $q['_id'];
				$q['title'] = $title;
				$q['average'] = $q['value']['total_score'];
				if(!isset($hotels[$title])){
					$q['count'] = 1;
					$city = $q['city'];
					$city = strtoupper(substr($city, 0,1)).substr($city, 1);
					$q['city'] = $city;
					$hotels[$title] = $q;
				}else{
					$hotels[$title]['count'] = $hotels[$title]['count']+1;
				}
			}
		}

		// foreach ($hotels as $hotel) {
		// 	if($hotel['count'] < count($searchs)){
		// 		unset($hotels[$hotel['title']]);
		// 	}
		// }

		return $hotels;
	}

	public static function getSearchWord($search){
		// $tmp = DB::collection('avg_total_score_copy')->where('title','LIKE','%'.$search.'%')
		// 	->orWhere('city','LIKE','%'.$search.'%')
		// 	->orWhere('address','LIKE','%'.$search.'%')->get();
		$tmp = DB::collection('avg_total_score_copy')->where('_id','LIKE','%'.$search.'%')
			->orWhere('city','=',$search)
			->orWhere('address','LIKE','%'.$search.'%')->get();
		return $tmp;
	}
}