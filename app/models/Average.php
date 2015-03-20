<?php

class Average extends Moloquent{

	protected $table = 'avg_total_score';

	public static function getAverageTotalRating($title){
		$tmp = DB::collection('avg_total_score')->where('_id','=',$title)->first();
		return $tmp['value']['total_score'];
	}

	
	//get unique list of search result
	//count for matching search word, title appears each time it match the result.
	//'valid' only the hotel has more than 100 reviews
	public static function getSearchs($searchs){
		$hotels = [];
		$searchs = explode(' ', $searchs);

		foreach ($searchs as $search) {
			$query = Average::getSearchWord($search);
			foreach ($query as $q) {
				if($q['valid']==1){
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
		}

		return $hotels;
	}

	//search from title, address, city
	public static function getSearchWord($search){
		$tmp = DB::collection('avg_total_score')->where('_id','LIKE','%'.$search.'%')
			->orWhere('city','=',$search)
			->orWhere('address','LIKE','%'.$search.'%')->get();
		return $tmp;
	}

	public static function getAverage($title){
		$tmp = DB::collection('avg_total_score')->where('_id','=',$title)->first();
		return $tmp['value'];
	}

}