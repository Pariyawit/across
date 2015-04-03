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
				if(strpos($comment,trim($review))!==false  and strpos($review,trim($comment))!==false){
					$comment = "<strong>".$comment."</strong>";
				}
				$tmp = $tmp." ".$comment;
			}
			$reviewer['review'] = $tmp;
			array_push($output, $reviewer);
		}
		return $output;
	}
}
