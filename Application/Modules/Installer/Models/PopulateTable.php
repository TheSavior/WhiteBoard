<?php
abstract class Application_Modules_Installer_Models_PopulateTable
{
	protected static $mapper;


	protected static $defaultValues = array();
	protected static $insertValues = array();

	protected static function setMapper(Spot_Mapper_Abstract $mapper)
	{
		self::$mapper = $mapper;
	}

	protected static function setDefaults(array $default)
	{
		self::$defaultValues = $default;
	}
	protected static function setValues(array $values)
	{
		self::$insertValues = $values;
	}

	protected static function run()
	{
		if (!self::$mapper)
			throw new Saros_Application_Exception("You must specify a mapper to populate");

		self::$mapper->migrate();

		self::populate();

		foreach (self::$insertValues as $toInsert)
		{
			$entity = self::$mapper->get();

			foreach (self::$defaultValues as $key => $value)
			{
				$entity[$key] = $value;
			}
			foreach ($toInsert as $key => $value)
			{
				$entity[$key] = $value;
			}

			self::$mapper->save($entity);
		}
	}
}
?>
