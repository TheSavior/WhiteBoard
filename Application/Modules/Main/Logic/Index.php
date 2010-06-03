<?php
class Application_Modules_Main_Logic_Index extends Saros_Core_Logic
{
	public function index()
	{
		$this->view->Version = Saros_Version::getVersion();
	}
	public function val()
	{
		return true;
	}
}