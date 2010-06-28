<?php
class Application_Models_Mappers_Topics extends Spot_Mapper_Abstract
{
	protected $table = "Topics";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $name = array("type" => "string");
	public $forum_id = array("type" => "int");
	public $user_id = array("type" => "int");
	public $post_count = array("type" => "int");
	public $view_count = array("type" => "int");
	public $time_added = array("type" => "int");
	public $time_modified = array("type" => "int");
	public $last_user_id = array("type" => "int");
}