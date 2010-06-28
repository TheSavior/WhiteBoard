<?php
class Application_Modules_Installer_Models_PopulateTable
{
	protected $mapper;


	protected $defaultValues = array();
	protected $insertValues = array();

	protected function setMapper(Spot_Mapper_Abstract $mapper)
	{
		$this->mapper = $mapper;
	}

	protected function setDefaults(array $default)
	{
		$this->defaultValues = $default;
	}
	protected function setValues(array $values)
	{
		$this->insertValues = $values;
	}

	protected function populate()
	{
		if (!$this->mapper)
		{
			throw new Application_
		}
		foreach ($insertValues as $toInsert)
		{
			$entity = $this->mapper->get();

			foreach ($defaults as $key => $value)
			{
				$entity[$key] = $value;
			}
			foreach ($config as $key => $value)
			{
				$entity[$key] = $value;
			}

			$this->mapper->save($entity);
		}
	}
}
?>
