<?php
class Application_Modules_Installer_Models_BuildTopics extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter)
	{
		self::setMapper(new Application_Models_Mappers_Topics($adapter));

		self::setValues();

		parent::run();
	}

	protected static function setValues()
	{
		$timestamp = time();

		self::$insertValues = array(
			array(	"name" => "Welcome to your WhiteBoard",
					"forum_id" => 2,
					"user_id" => 1,
					"post_count" => 0,
					"view_count" => 0,
					"time_added" => $timestamp,
					"time_modified" => $timestamp,
					"last_user_id" => 1
			),
		);
	}
}