<?php

class Address extends RESTClass
{
	private $Database = null;

	public function __construct()
	{
		$this->Database = new Database();
	}

	public function __destruct()
	{
		$this->Database = null;
	}

	protected function getRequest($data)
	{
		if(isset($data['getScore']) && $data['getScore'])
		{
			$view = new View('scoreboard');

			if(isset($data['quizID']))
			{
				$dataForView = retrieveBoard::getScores($data['quizID']);
					//ok - its your address!
					//load old values
					$view->setData((array) $dataForView);

					$jsonResponse = new JSON();
					$jsonResponse->result = true;
					$jsonResponse->setData(array('html' => $view->parse()));
					$jsonResponse->send();
				}
		}
	}

}
