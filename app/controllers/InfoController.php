<?php

class InfoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function search(){
		$input = Input::all();
		$searchs = explode(' ', $input['search']);
		$results = [];
		
		$titles = [];
		foreach ($searchs as $search) {
			$query = Info::searchHotel($search);
			$tmp = [];
			foreach ($query as $q) {
				array_push($tmp,$q['title']);
			}
			$titles = array_unique(array_merge($titles,$tmp));
		}

		foreach ($titles as $title) {
			$info = Info::getHotel($title);
			$result = [];

			$result['title'] = $info['title'];
			$result['name'] = $info['name'];
			$result['city'] = $info['city'];
			$result['address'] = $info['address'];

			$result['booking'] = '-';
			$result['agoda'] = '-';
			$result['tripadvisor'] = '-';

			$ratings = Rating::getTotalRating($info['title']);

			$sum = 0;
			$count = 0;
			foreach ($ratings as $rating) {
				if($rating['source'] == 'booking'){
					$result['booking'] = $rating['total_score'];
					$sum = $sum+$rating['total_score'];
					$count = $count+1;
				}else if($rating['source'] == 'agoda'){
					$result['agoda'] = $rating['total_score'];
					$sum = $sum+$rating['total_score'];
					$count = $count+1;
				}else if($rating['source'] == 'tripadvisor'){
					$result['tripadvisor'] = $rating['total_score'];
					$sum = $sum+($rating['total_score']*2);
					$count = $count+1;
				}
			}

			// $tmp = Average::getAverageTotalRating($info->title);
			// $result['average'] = Average::getAverageTotalRating($info->title);
			$result['average'] = $sum/$count;

			array_push($results,$result);
		}

		// return $results

		$average = array();
		foreach ($results as $key => $row)
		{
			$average[$key] = $row['average'];
		}
		array_multisort($average, SORT_DESC, $results);
		// return $results;
		return View::make('search',['results'=>$results,'search'=>$search]);
	}

	public function show()
	{
		$input = Input::all();
		$title = $input['hotel'];
		$info = Info::where('title', '=', $title)->first();
		return View::make('hotel',['info'=>$info]);
	}

}
