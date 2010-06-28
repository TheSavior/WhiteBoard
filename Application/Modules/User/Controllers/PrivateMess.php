<?php
class Application_Modules_Main_Controllers_Topic extends Saros_Application_Controller
{
	// This will show the list of private messages
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}

	// Write a new private message
	public function composeAction()
	{

	}

	// Reply to a private message (Should this be part of writeAction)
	public function replyAction()
	{

	}

	// Delete a private message
	public function deleteAction()
	{

	}
}