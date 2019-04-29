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
		$this->view->username = $this->user->username;
		$quiz=$this->giveID();
		$this->view->scores =$quiz;//retrieveBoard::getScores($quiz);



	}

    /**
     *
     */
		 private function giveID()
	 	{
			$quiz=null;
	 		if(isset($_POST['action']) && $_POST['action'] == 'getScore')
	 		{
				$quiz=$_POST['quizID'];
				$result=retrieveBoard::getScores($quiz);
				$processed=json_encode($result);
	 			//now we need our Model to save the values
	 		  //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object
	 			//normally we would first make a new object like so:
				//$this->view->scores =$this->user->username;
	 			//$gameObj = new GameModel();
	 			//$gameObj->saveScoreAndAttempts($userid, $score, $attempts);
	 			//but if a method is defined as static - it can be used directly like a function

	 			//finally send a JSON message that we saved the values...
	 			$jsonResponse = new JSON();
	 			$jsonResponse->result = true; //this is important, as the frontend expects result true if everything was ok
	 			$jsonResponse->setMessage($processed); //(optional)
	 			$jsonResponse->send();
	 		}
			return $quiz;
		}
}
