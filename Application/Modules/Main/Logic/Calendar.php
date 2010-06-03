<?php
class Application_Modules_Main_Logic_Calendar extends Saros_Core_Logic
{
	/**
	* This will display the main calendar
	*/
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}
}