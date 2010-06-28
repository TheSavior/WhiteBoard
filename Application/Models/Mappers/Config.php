<?php
class Application_Models_Mappers_Config extends Spot_Mapper_Abstract
{
	// table name
	protected $table = "Config";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $name = array("type" => "string");
	public $value = array("type" => "string");
	public $description = array("type" => "string");
	// public $readonly = array("type" => "enum", "values" => array(0,1));
	public $group = array("type" => "string"); // Is this needed anymore?
	public $time_modified = array("type" => "int");
}