<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class scoreBoardController extends Controller
{
	protected $viewFileName = "scoreboard"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->giveID();
	}

    /**
     *
     */
		 private function giveID()
	 	{
                    //nehme argumente von der JSON die wir gepostet haben
                    //fütter retrieveBoard.getScores mit dem Element im Feld quizID
                    //speicher seine Antwort als einen JSON array
                    //Schick ihn an unseren Javascript zurück
	 		if(isset($_POST['action']) && $_POST['action'] == 'getScore')
	 		{
				$quiz=$_POST['quizID'];
				$result=retrieveBoard::getScores($quiz);
				$processed=json_encode($result);
	 			$jsonResponse = new JSON();
	 			$jsonResponse->result = true; 
	 			$jsonResponse->setMessage($processed);
	 			$jsonResponse->send();
	 		}
		}
}
