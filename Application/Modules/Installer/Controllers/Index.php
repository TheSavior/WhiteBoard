<?php
class Application_Modules_Installer_Controllers_Index extends Saros_Application_Controller
{
	public function indexAction()
	{
		$adapter = $this->registry->dbAdapter;
		$populate = new Application_Modules_Installer_Models_PopulateTable($adapter);

		Application_Modules_Installer_Models_BuildBans::run($adapter);
		Application_Modules_Installer_Models_BuildConfig::run($adapter);
		Application_Modules_Installer_Models_BuildForums::run($adapter);
		Application_Modules_Installer_Models_BuildGroups::run($adapter);
		Application_Modules_Installer_Models_BuildImages::run($adapter);
		Application_Modules_Installer_Models_BuildOnline::run($adapter);
		Application_Modules_Installer_Models_BuildPermissions::run($adapter);
		Application_Modules_Installer_Models_BuildPosts::run($adapter);
		Application_Modules_Installer_Models_BuildThemes::run($adapter);
		Application_Modules_Installer_Models_BuildTopics::run($adapter);

		Application_Modules_Installer_Models_BuildUsers::run($adapter, "Username", "Displayname", "Password", "email@gmail.com");
	}
	public function val()
	{
		return true;
	}
}