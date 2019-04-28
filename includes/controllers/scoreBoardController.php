<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class scoreboardController extends Controller
{
	protected $viewFileName = "scoreboard"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->username = $this->user->username;

		$this->view->address = AddressModel::getAddressById($id);
	}

}