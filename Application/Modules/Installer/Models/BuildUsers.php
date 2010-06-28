<?php
/**
* @todo This should be brought out into a call to a registration model
*/
class Application_Modules_Installer_Models_BuildUsers extends Application_Modules_Installer_Models_PopulateTable
{
	/**
	* Run will migrate the table and populate
	*/
	public static function run($adapter, $username, $displayname, $password, $email)
	{
		self::setMapper(new Application_Models_Mappers_Users($adapter));

		self::setValues($username, $displayname, $password, $email);

		parent::run();
	}

	protected static function setValues($username, $displayname, $password, $email)
	{
		$timestamp = time();

		$pass = self::encryptPassword($password);

		self::$insertValues = array(
			array(	"username" => $username,
					"displayname" => $displayname,
					"password" => $pass[0],
					"hash" => $pass[1],
					"email" => $email,
					"group_id" => 1,
					"theme_id" => 1,
					"time_added" => $timestamp,
					"last_active" => $timestamp,
					"last_login" => $timestamp,
					"avatar" => 1,
					"signature" => "",
					"total_posts" => 0,
					"total_topics" => 1,
					"posts_per_page" => 10,
					"topics_per_page" => 20,
					"read_topics" => "",
					"show_online" => 1
			),
		);
	}

	/**
	* This will encrypt a given string by generating
	* a random string, concatenating it to the beggining
	* and sha1'ing the result.
	*
	* @param string $password The password to hash
	* @return array The first element is the resulting hash, the second
	* 				element is the random hash needed for subsequent
	* 				hashing.
	*/
	protected static function encryptPassword($password)
	{
		$hash = sha1(rand());
		$hash = substr($hash, -7);

		$pass = sha1($hash.$password);
		return array($pass, $hash);
	}
}