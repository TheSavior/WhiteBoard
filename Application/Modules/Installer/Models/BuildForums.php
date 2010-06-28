<?php
class Application_Modules_Installer_Models_BuildForums extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter)
	{
		self::setMapper(new Application_Models_Mappers_Forums($adapter));

		self::setValues();

		parent::run();
	}

	protected static function setValues()
	{
		$timestamp = time();

		// Default values for config entities
		self::$defaultValues = array(
			"active" => 1,
			"isRedirect" => 0,
			"mod_user_ids" => "",
			"mod_group_ids" => "",
			"time_added" => $timestamp,
			"theme_id" => 1
		);

		// The config values to insert
		self::$insertValues = array(
			array(
					"is_cat" => 1,
					"name" => "First Category",
					"sort_order" => 1,
					"parent_ids" => "1,-1",
					"last_post_id" => 0,
					"post_count" => 0,
					"topic_count" => 1,
					"parent_id" => 0,
			),
			array(
					"is_cat" => 0,
					"name" => "First Forum",
					"sort_order" => 1,
					"parent_ids" => "2,1,-1",
					"last_post_id" => 1,
					"post_count" => 0,
					"topic_count" => 1,
					"parent_id" => 1,
			),
		);
	}
}