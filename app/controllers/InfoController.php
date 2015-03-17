<?php

class InfoController extends \BaseController {

	public function search(){
		$input = Input::all();
		$searchs = $input['search'];
		$hotels = []; //to save data
		
		$hotels = AverageCopy::getSearchs($searchs);

		// foreach ($searchs as $search) {
		// 	$query = AverageCopy::getSearch($search);
		// 	foreach ($query as $q) {
		// 		$title = $q['_id'];
		// 		$q['title'] = $title;
		// 		$q['average'] = $q['value']['total_score'];
		// 		$hotels[$title] = $q;
		// 	}
		// }

		if($hotels == null){
			return View::make('search',['hotels'=>$hotels,'search'=>$input['search']]);
		}

		foreach ($hotels as $key => $row)
		{
			$sort['average'][$key] = $row['value']['total_score'];
			$sort['count'][$key] = $row['count'];
		}
		array_multisort($sort['count'],SORT_DESC,$sort['average'], SORT_DESC,$hotels);

		$lim = 0;
		$hotels_tmp = $hotels;
		$hotels=[];
		foreach($hotels_tmp as $hotel){
			$hotel['booking'] = '-';
			$hotel['agoda'] = '-';
			$hotel['tripadvisor'] = '-';

			$ratings = Rating::getTotalRating($hotel['title']);

			$sum = 0;
			$count = 0;
			foreach ($ratings as $rating) {
				if($rating['source'] == 'booking'){
					$hotel['booking'] = $rating['total_score'];
					$sum = $sum+$rating['total_score'];
					$count = $count+1;
				}else if($rating['source'] == 'agoda'){
					$hotel['agoda'] = $rating['total_score'];
					$sum = $sum+$rating['total_score'];
					$count = $count+1;
				}else if($rating['source'] == 'tripadvisor'){
					$hotel['tripadvisor'] = $rating['total_score'];
					$sum = $sum+($rating['total_score']*2);
					$count = $count+1;
				}
			}
			$lim = $lim+1;
			array_push($hotels, $hotel);
			if($lim > 20) break;
		}
		return View::make('search',['hotels'=>$hotels,'search'=>$input['search']]);
	}

	public function show()
	{
		$input = Input::all();
		$title = $input['hotel'];
		$info = Info::where('title', '=', $title)->first();
		return View::make('hotel',['info'=>$info]);
	}

}
