<?php
class Application_Modules_Main_Controllers_Calendar extends Saros_Core_Controller
{
	/**
	* This will display the main calendar
	*/
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}
}