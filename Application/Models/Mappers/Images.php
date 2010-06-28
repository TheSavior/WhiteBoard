<?php
class Application_Models_Mappers_Images extends Spot_Mapper_Abstract
{

	// table name
	protected $table = "Images";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $name = array("type" => "string");
	public $url = array("type" => "string");
}