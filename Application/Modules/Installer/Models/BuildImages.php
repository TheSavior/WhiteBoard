<?php
class Application_Modules_Installer_Models_BuildImages extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter)
	{
		self::setMapper(new Application_Models_Mappers_Images($adapter));

		self::setValues();

		parent::run();
	}

	protected static function setValues()
	{
		/**
		* @todo Figure out where Uploads will live
		*/
		
		self::$insertValues = array(
			array(	"name" => "Avatar",
					"url" => ROOT_PATH."images/avatar_1.png"
			),
		);
	}
}