<?php

class Info extends Moloquent{

	protected $table = 'info';

	public static function searchHotel($search){
		return  DB::collection('info')->where('title','LIKE','%'.$search.'%')
			->orWhere('city','LIKE','%'.$search.'%')
			->orWhere('address','LIKE','%'.$search.'%')->get(['title']);
	}

	public static function getHotel($title){
		$query = DB::collection('info')->where('title','=',$title)->first();
		return $query;
	}
}
