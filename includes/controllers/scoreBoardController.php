<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class scoreBoardController extends Controller
{
	public $score;
	protected $viewFileName = "scoreboard"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->username = $this->user->username;
		$this->giveID();
		//$this->view->scores = $this->giveID();

	}
	public function giveID()
	{
		if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
		{
			$quizID='quiz1';//$_POST['quizID'];//$_POST['quizID'];
			$this->view->scores=retrieveBoard::getScores('quiz1');
			//$this->view->scores=$this->$quizID;
			//now we need our Model to save the values
			//retrieveBoard::getScores($quizID);
			$jsonResponse = new JSON();
			$jsonResponse->result = true; //this is important, as the frontend expects result true if everything was ok
			$jsonResponse->setMessage("Saved the values!"); //(optional)
			$jsonResponse->send(); //:: ist only working when we define a Method as static. That means one can use the method without instanciating an object
		}
return $quizID;
}
}
