<?php
class Application_Modules_Installer_Models_BuildThemes extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter)
	{
		self::setMapper(new Application_Models_Mappers_Themes($adapter));

		self::setValues();

		parent::run();
	}

	protected static function setValues()
	{
		self::$insertValues = array(
			array(	"name" => "Default",
					"display_name" => "Default"
			),
		);
	}
}