<?php
class Application_Models_Mappers_Posts extends Spot_Mapper_Abstract
{
	// table name
	protected $table = "Posts";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $topic_id = array("type" => "int");
	public $user_id = array("type" => "int");
	public $time_added = array("type" => "int");
	public $last_edited = array("type" => "int");
	public $message = array("type" => "text");
}