<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class quizListController extends Controller
{
	protected $viewFileName = "quizlist"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->username = $this->user->username;

		$this->view->address = AddressModel::getAddressById($id);
	}

}