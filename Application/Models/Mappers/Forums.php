<?php
class Application_Models_Mappers_Forums extends Spot_Mapper_Abstract
{
	// table name
	protected $table = "Forums";

	public $id = array("type" => "int", "primary" => true, "serial" => true);
	public $is_cat = array("type" => "enum", "values" => array(0,1));
	public $name = array("type" => "string");
	public $description = array("type" => "string");
	public $sort_order = array("type" => "int");

	/**
	* The path to this element by the parent
	*/
	public $parent_ids = array("type" => "string");
	public $last_post_id = array("type" => "int");
	public $post_count = array("type" => "int");
	public $topic_count = array("type" => "int");
	public $active = array("type" => "enum", "values" => array(0,1));
	public $isRedirect = array("type" => "enum", "values" => array(0,1));
	public $redirectURL = array("type" => "string");
	public $redirectHits = array("type" => "int");
	public $mod_user_ids = array("type" => "text");
	public $mod_group_ids = array("type" => "text");
	public $time_added = array("type" => "int");
	public $parent_id = array("type" => "int");
	public $theme_id = array("type" => "int");


	/**
	* The parent of this forum
	*/
	public $parent = array(
        'type' => 'relation',
        'relation' => 'HasOne',
        'mapper' => ":self",
        'where' => array('id' => ':entity.parent_id')
    );

    /**
    * The direct children of this forum
    */
    public $children = array(
        'type' => 'relation',
        'relation' => 'HasMany',
        'mapper' => ":self",
        'where' => array('parent_id' => ':entity.id')
    );

    public $theme = array(
    	'type' => 'relation',
    	'relation' => 'HasOne',
    	'mapper' => "Application_Models_Mappers_Themes",
    	'where' => array('id' => ':entity.theme_id')
    );

    /**
    * @todo Should have a relation for mod
    * @todo Should have a relation for mod groups
    */

}