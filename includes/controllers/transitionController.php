<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class transitionController extends Controller
{
	protected $viewFileName = "transition"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{

                  $this->checkForSaveScorePost();
	}


	private function checkForSaveScorePost()
	{
            //entpacke den Post, den wir am Ende des Quiz übergeben haben , speicher die Variablen seiner
            //JSON und übergib ihn an die funktion GameModel.saveScore
		if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
		{
			$score = $_POST['score'];
			$time = $_POST['time'];
      $quizID=$_POST['quizID'];
			$userid = $this->user->id;

			//now we need our Model to save the values
			GameModel::saveScore($userid,$quizID, $score, $time); //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object
			//normally we would first make a new object like so:
			//$gameObj = new GameModel();
			//$gameObj->saveScoreAndAttempts($userid, $score, $attempts);
			//but if a method is defined as static - it can be used directly like a function

			//finally send a JSON message that we saved the values...
			$jsonResponse = new JSON();
			$jsonResponse->result = true; //this is important, as the frontend expects result true if everything was ok
			$jsonResponse->setMessage("Saved the values!"); //(optional)
			$jsonResponse->send();
		}
	}
}
