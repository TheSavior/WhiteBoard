<?php
/**
* This will contain the main user actions:
* login, logout, forgout user password, register
*/
class Application_Modules_User_Controllers_ControlPanel extends Saros_Core_Controller
{
	public function init()
	{
		$this->auth = Saros_Auth::getInstance();
		$users = new Application_Models_Mappers_Users($this->registry->dbAdapter);

		$authAdapter = new Saros_Auth_Adapter_Spot_Hash($users, "username", "password", "hash");
		$this->auth->setAdapter($authAdapter);
	}

	/**
	* This will check if a user exists. If it does
	* then it will redirect, otherwise it will provide the login form.
	* The login form processes in logInAction()
	*/
	public function indexAction()
	{
		// Check log in
	}

	public function logInAction()
	{

	}

	public function logOutAction()
	{
		$this->auth->clearIdentity();
	}

	public function registerAction()
	{

	}

	public function forgotPasswordAction()
	{

	}
}