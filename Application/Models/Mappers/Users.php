<?php
class Application_Models_Mappers_Users extends Spot_Mapper_Abstract
{

	// table name
	protected $table = "Users";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $username = array("type" => "string");
	public $displayname = array("type" => "string");
	public $password = array("type" => "string");
	public $hash = array("type" => "string");
	public $email = array("type" => "string");
	public $firstname = array("type" => "string");
	public $lastname = array("type" => "string");
	public $group_id = array("type" => "int");
	public $theme_id = array("type" => "int");
	public $gender = array("type" => "string");
	public $country = array("type" => "string");
	public $birth_day = array("type" => "int");
	public $birth_month = array("type" => "int");
	public $birth_year = array("type" => "int");
	public $time_added = array("type" => "int");
	public $last_active = array("type" => "int");
	public $last_login = array("type" => "int");
	public $last_ip = array("type" => "int");
	public $avatar = array("type" => "int");
	public $signature = array("type" => "text");
	public $date_format = array("type" => "string");
	public $time_format = array("type" => "string");
	public $time_zone = array("type" => "string");
	public $verified = array("type" => "enum", "values" => array(0,1));
	public $total_posts = array("type" => "int");
	public $total_topics = array("type" => "int");
	public $posts_per_page = array("type" => "int");
	public $topics_per_page = array("type" => "int");
	public $read_topics = array("type" => "text");
	public $read_time = array("type" => "int");
	public $session_id = array("type" => "string");
	public $cookie = array("type" => "string");
	public $ip = array("type" => "string");
	public $show_online = array("type" => "enum", "values" => array(0,1));
	public $send_digests = array("type" => "enum", "values" => array(0,1));
	public $website = array("type" => "string");
}