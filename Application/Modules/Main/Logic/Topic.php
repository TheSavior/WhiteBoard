<?php
/**
* This file will do everything that is done TO a topic.
* That means, Deleting topics, replying to a topic
*/
class Application_Modules_Main_Logic_Topic extends Saros_Core_Logic
{
	/**
	* This will show a topic
	*/
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}

	/**
	* In order to reply to a topic
	*/
	public function replyAction()
	{

	}

	/**
	* Delete a topic
	*
	*/
	public function deleteAction()
	{

	}

	/**
	* Create a new topic
	*/
	public function newAction()
	{

	}
}