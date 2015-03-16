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

	public static function getSearch($search){
		$tmp = DB::collection('avg_total_score_copy')->where('title','LIKE','%'.$search.'%')
			->orWhere('city','LIKE','%'.$search.'%')
			->orWhere('address','LIKE','%'.$search.'%')->get();
		return $tmp;
	}
}