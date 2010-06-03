<?php
class Application_Modules_Main_Logic_Forum extends Saros_Core_Logic
{
	public function indexAction()
	{
		$this->view->Version = Saros_Version::getVersion();
	}
}