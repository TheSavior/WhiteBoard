<?php
class Application_Modules_Installer_Logic_Index extends Saros_Core_Logic
{
	public function indexAction()
	{
		$configMapper = new Application_Models_Mappers_Config();

		$config = $configMapper->get();
		$config->name = "SiteName";
		$config->value = "Forum_Name"; // This should be a dynamic variables
		// $config->readonly = 0; // when enum's are supported
		$config->description = "The name of the website to appear in the titlebar, and at the start of breadcrumbs.";

		$configDefaults = array(
			// "readonly" => 0, // For Enums
			"group" => "general",
			"time_modified" => $timestamp
		);
		$configs = array(
			array(	"name" => "SiteName",
					"value" => "Forum_Name", // Dynamic Variables
					"description" => "The name of the website to appear in the titlebar, and at the start of breadcrumbs.",
			),
			array(	"name" => "ForumVersion",
					"value" => "1.0",
					"description" => "The version of the forum system",
					//"readonly" => 1,
			),
			array(	"name" => "DefaultTheme",
					"value" => 1,
					"description" => "The default theme to use for the forum",
			),
			array(	"name" => "CrumbSeperator",
					"value" => "&raquo;",
					"description" => "The seperator used in the breadcrumbs",
			),
			array(	"name" => "TimeZone",
					"value" => "America/Los_Angeles",
					"description" => "The default timezone for the board to use."
			),
			array(	"name" => "DateFormat",
					"value" => "n/j/y",
					"description" => "The date format to use on the board. Format according to PHP's date() function",
			),
			array(	"name" => "TimeFormat",
					"value" => "g:ia",
					"description" => "The time format to use on the board. Format according to PHP\'s date() function.",
			),
			array(	"name" => "PostsPerPage",
					"value" => 10,
					"description" => "The number of posts to display on a single page",
			),
			array(	"name" => "TopicsPerPage",
					"value" => 20,
					"description" => "The number of topics to display on a single page",
			),
			array(	"name" => "UsersOnlineOffset",
					"value" => "15",
					"description" => "The number of minutes for the Users Online list to display"
			)
		);

		$this->view->Version = Saros_Version::getVersion();
	}
	public function val()
	{
		return true;
	}
}