<?php
/**
* Account Settings
		Display Name
		Password
		Email
		Avatar
		Signature
	Personal Settings
		First Name
		Last Name
		Gender
		Country
		BirthDate (Day, Month, Year)
	Display Settings
		Date Format
		Time Format
		Time Zone
		Posts per page
		Topics per page
	Privacy Settings
		Show Online
		Send Digests
*/
class Application_Modules_User_Logic_ControlPanel extends Saros_Core_Logic
{
	/**
	* This is the main entry point for the control panel,
	* will be the "account settings" page
	*/
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}

	public function personalAction()
	{

	}

	public function displayAction()
	{

	}

	public function privacyAction()
	{

	}


}