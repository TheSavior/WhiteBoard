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
	* DONE - Delete Posts
	* DONE - Edit Posts
	* DONE - Move Posts
	*
	* DONE - Login
	* DONE - Logout
	* DONE - Register
	* DONE - Forgot Password
	*
	* DONE - Profile
	* DONE - Member List (it's own page?)
	* DONE - 	User/View/Profile/4
	* DONE -  	User/View/List
	* DONE - Online List

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