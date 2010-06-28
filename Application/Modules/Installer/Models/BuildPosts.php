<?php
class Application_Modules_Installer_Models_BuildPosts extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter)
	{
		self::setMapper(new Application_Models_Mappers_Posts($adapter));

		self::setValues();

		parent::run();
	}

	protected static function setValues()
	{
		$timestamp = time();

		self::$insertValues = array(
			array(	"topic_id" => 1,
					"user_id" => 1,
					"time_added" => $timestamp,
					"message" => "Congratulations, WhiteBoard installed successfully.",
			),
		);
	}
}