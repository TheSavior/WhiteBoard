<?php
class Application_Modules_Installer_Models_BuildGroups extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter)
	{
		self::setMapper(new Application_Models_Mappers_Groups($adapter));

		self::setValues();

		parent::run();
	}

	protected static function setValues()
	{
		// The config values to insert
		self::$insertValues = array(
			array(	"name" => "Administrator",
					"user_title" => "Administrator",
					"use_image" => 0,
					"image_id" => 0,
					"set_title" => 0,
					"flood_delay" => 0,
					"color" => "#9F1313",
					"parent_group_id" => 1
			),
			array(	"name" => "Member",
					"user_title" => "Member",
					"use_image" => 0,
					"image_id" => 0,
					"set_title" => 0,
					"flood_delay" => 30,
					"color" => "#000000",
					"parent_group_id" => 2
			),
			array(	"name" => "Guest",
					"user_title" => "Guest",
					"use_image" => 0,
					"image_id" => 0,
					"set_title" => 1,
					"flood_delay" => 30,
					"color" => "#3F3F3F",
					"parent_group_id" => 3
			)
		);
	}
}