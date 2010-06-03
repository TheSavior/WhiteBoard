<?php

/**
 * Our Test Runner
 *
 * @copyright Eli White & SaroSoftware 2010
 * @license http://www.gnu.org/licenses/gpl.html GNU GPL
 *
 * @package SarosFramework
 * @author Eli White
 * @link http://sarosoftware.com
 * @link http://github.com/TheSavior/Saros-Framework
 */

error_reporting(E_ALL);

// Require PHPUnit Files
require_once 'PHPUnit/Framework.php';
require_once 'PHPUnit/Framework/TestSuite.php';
require_once 'PHPUnit/TextUI/TestRunner.php';

define("ROOT_PATH",  realpath(dirname(dirname(__FILE__)))."/");

function autoload($classname)
{

	$filename = str_replace("_","/",$classname).".php";
	if(file_exists(ROOT_PATH.$filename))
		require_once(ROOT_PATH.$filename);
	else
		return false;
}
spl_autoload_register('autoload');

require_once('Library/Saros/Core/AutoLoader.php');
spl_autoload_register(array('Saros_Core_AutoLoader', 'autoload'));


Tests_AllTests::main();

?>