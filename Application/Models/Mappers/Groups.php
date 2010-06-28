<?php
class Application_Models_Mappers_Groups extends Spot_Mapper_Abstract
{

	// table name
	protected $table = "Groups";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $name = array("type" => "string");
	public $user_title = array("type" => "string");
	public $use_image = array("type" => "enum", "values"=> array(0,1));
	public $image_id = array("type" => "int");
	public $set_title = array("type" => "enum", "values" => array(0,1));
	public $flood_delay = array("type" => "int");
	public $color = array("type" => "string");
	public $parent_group_id = array("type" => "int");
}