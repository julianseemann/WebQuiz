<?php

class retrieveBoard
{

	public static function getScores($quizID)
	{
        //entnehme alle Scores mit einem descending order, WHERE quizID ist eine übergeben variable
		$db = new Database();
		$quizID=$db->escapeString($quizID);
		$sql = "SELECT name,quizID,compleTime,score from scoreboard as a inner join user as b on b.id=userID where `quizID`='$quizID' order by score desc";
		$result = $db->query($sql);
		if($db->numRows($result) > 0)
		{
			$scores = array();
			while($row = $db->fetchObject($result))
			{
				$scores[] = $row;
			}
			return $scores;
		}
		return null;
	}
	//... and other awesome stuff in the GameModel that we are currently not interessted in...
}
