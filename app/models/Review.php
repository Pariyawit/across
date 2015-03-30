<?php

class Review extends Moloquent{

	protected $table = 'review';

	public static function getFullReview($title,$review){
		$query = DB::collection('review')->where('title','=',$title)->where('comment','LIKE','%'.$review.'%')->get();

		$output = [];
		foreach ($query as $q) {
			$reviewer = $q;
			$comments = $q['comment'];
			$tmp = "";
			foreach ($comments as $comment) {
				// var_dump($comment);
				if($comment == $review){
					$comment = "<b>".$comment."</b>";
				}
				$tmp = $tmp." ".$comment;
			}
			$reviewer['review'] = $tmp;
			array_push($output, $reviewer);
		}
		// var_dump($output);
		return $output;
	}
}
