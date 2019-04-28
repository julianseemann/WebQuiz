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
		$this->view->username = $this->user->username;

		$this->view->address = AddressModel::getAddressById($id);
	}

}