<?php
class Test_Application_Modules_Main_Controllers_Index extends PHPUnit_Framework_TestCase
{
	protected $object;

	public function setUp()
	{
		$this->object = new Application_Modules_Main_Controllers_Index(new Saros_Core_Registry());
	}

	public function testIndex()
	{
		$this->assertTrue($this->object->val());
	}
}