<?php
class Application_Models_Mappers_Themes extends Spot_Mapper_Abstract
{
	protected $table = "Themes";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $name = array("type" => "string");
	public $display_name = array("type" => "string");
}