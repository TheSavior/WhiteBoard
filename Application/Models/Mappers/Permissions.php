<?php
class Application_Models_Mappers_Permissions extends Spot_Mapper_Abstract
{

	// table name
	protected $table = "Permissions";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $group_id = array("type" => "int");
	public $name = array("type" => "string");
	public $value = array("type" => "text");
}