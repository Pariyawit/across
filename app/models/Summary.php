<?php

class Summary extends Moloquent{

	protected $table = 'summary';

	public static function getSummary($title){

		$topics = ['cleanliness','comfort','value','location','staff'];

		$query = DB::collection('summary')->where('_id','=',$title)->first();

		$output = [];
		foreach ($topics as $topic) {
			
			if(count($query[$topic])>8){
				$i=3;
				$bound = 8;
			}
			else{
				$i=0;
				$bound = 5;
			}

			$output[$topic]=[];
			for($i; $i<$bound && $i<count($query[$topic]) ; $i=$i+1){
				array_push($output[$topic],$query[$topic][$i]); 
			}
		}
		return $output;
	}
}
