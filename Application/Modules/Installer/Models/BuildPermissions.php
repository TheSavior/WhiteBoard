<?php
class Application_Modules_Installer_Models_BuildPermissions extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter)
	{
		self::setMapper(new Application_Models_Mappers_Permissions($adapter));

		self::setValues();

		parent::run();
	}

	protected static function setValues()
	{
		self::$defaultValues = array(
			"value" => "true"
		);

		// The config values to insert
		self::$insertValues = array(
			array(	"group_id" => 1,
					"name" => "ViewAdmin",
			),
			array(	"group_id" => 1,
					"name" => "ViewBoard",
			),
			array(	"group_id" => 2,
					"name" => "ViewBoard",
			),
			array(	"group_id" => 2,
					"name" => "ViewBoard",
			),
			array(	"group_id" => 3,
					"name" => "ViewBoard",
			),
			array(	"group_id" => 1,
					"name" => "Forum1",
					"value" => "View:true,NewTopic:true,Reply:true,EditSelf:true,EditOthers:true,DeleteSelf:true,DeleteOthers:true,"
			),
			array(	"group_id" => 2,
					"name" => "Forum1",
					"value" => "View:true,NewTopic:true,Reply:true,EditSelf:true,DeleteSelf:true,"
			),
			array(	"group_id" => 3,
					"name" => "Forum1",
					"value" => "View:true,"
			),
			array(	"group_id" => 1,
					"name" => "Forum2",
					"value" => "View:true,NewTopic:true,Reply:true,EditSelf:true,EditOthers:true,DeleteSelf:true,DeleteOthers:true,"
			),
			array(	"group_id" => 2,
					"name" => "Forum2",
					"value" => "View:true,NewTopic:true,Reply:true,EditSelf:true,DeleteSelf:true,"
			),
			array(	"group_id" => 3,
					"name" => "Forum3",
					"value" => "View:true,"
			)
		);
	}
}