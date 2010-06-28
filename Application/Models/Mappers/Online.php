<?php
class Application_Models_Mappers_Online extends Spot_Mapper_Abstract
{

	// table name
	protected $table = "Online";

	public $user_id = array("type" => "int");
	public $ip = array("type" => "string");
	public $session_id = array("type" => "string");
	public $time_modified = array("type" => "int");
	public $page = array("type" => "string");
}