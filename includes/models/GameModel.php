<?php

class GameModel
{
	public static function saveScoreAndAttempts($userid, $quizID, $score, $time)
	{
		$db = new Database();

		//prevent SQL Injection:
    $quizID=$db->escapeString($quizID);
		$userid = $db->escapeString($userid);
		$score = $db->escapeString($score);
		$time = $db->escapeString($time);

		$sql = "INSERT INTO scoreboard(`userID`,`quizID`,`compleTime`,`score`) VALUES('".$userid."','".$quizID."','".$time."','".$score."')";
		$db->query($sql);
	}

	//... and other awesome stuff in the GameModel that we are currently not interessted in...
}
