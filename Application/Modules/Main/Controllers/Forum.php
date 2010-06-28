<?php
class Application_Modules_Main_Controllers_Forum extends Saros_Application_Controller
{
	public function indexAction()
	{
		$this->view->show(false);
	}
}