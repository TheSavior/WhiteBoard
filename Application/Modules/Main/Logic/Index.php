<?php
class Application_Modules_Main_Logic_Index extends Saros_Core_Logic
{
	/**
	* Need to find a place for the following actions:
	*
	* DONE - Calendar View
	* DONE - Control Panel
	*
	* DONE - Forum Statistics page
	* DONE - Most users ever online at once?
	*
	* DONE - Private Messages
	*
	* Delete Posts
	* Edit Posts
	*
	* DONE - Login
	* DONE - Logout
	* DONE - Register
	* DONE - Forgot Password
	*
	* Profile
	* Member List (it's own page?)
	*
	* \Members
	* \Members\14
	*
	* Online List
	*
	*
	*
	* Search
	*/

	/**
	* This will show the main board
	*
	*/
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}
	public function val()
	{
		return true;
	}
}