<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Average extends Moloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'avg_total_score';

	public static function getAverageTotalRating($title){
		$tmp = DB::collection('avg_total_score')->where('_id','=',$title)->first();
		return $tmp['value']['total_score'];
	}

	public static function getAverage($title){
		$tmp = DB::collection('avg_total_score')->where('_id','=',$title)->first();
		return $tmp['value'];
	}
}