<?php
class Application_Models_Mappers_Bans extends Spot_Mapper_Abstract
{
	// table name
	protected $table = "Bans";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $user_id = array("type" => "int");
	public $email = array("type" => "string");
	public $ip = array("type" => "string");
	public $length = array("type" => "string");
	public $message = array("type" => "text");
}