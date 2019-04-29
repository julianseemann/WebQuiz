<?php

class retrieveBoard
{

	public static function getScores($quizID)
	{
		$db = new Database();
		$quizID=$db->escapeString($quizID);
		$sql = "SELECT name,quizID,compleTime,score from scoreboard as a inner join user as b on b.id=userID where `quizID`='$quizID' order by score desc";
		$result = $db->query($sql);
		if($db->numRows($result) > 0)
		{
			$addressesArray = array();
			while($row = $db->fetchObject($result))
			{
				$addressesArray[] = $row;
			}
			return $addressesArray;
		}
		return null;
	}
	//... and other awesome stuff in the GameModel that we are currently not interessted in...
}
