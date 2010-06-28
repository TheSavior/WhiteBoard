<?php
class Application_Modules_Main_Controllers_Topic extends Saros_Application_Controller
{
	/**
	* This page will show additional statistics to the forum
	* Things like Most users ever online at once, most popular topic
	* user with the most posts
	*/
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}
}