<?php
class Application_Models_Mappers_Users extends Spot_Mapper_Abstract
{

	// table name
	protected $table = "users";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $username = array("type" => "string");
	public $password = array("type" => "string");
	public $hash = array("type" => "string");
}