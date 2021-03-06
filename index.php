<?php
/**
 * This class sets up the neccessary files and objects.
 *
 * @copyright Eli White & SaroSoftware 2010
 * @license http://www.gnu.org/licenses/gpl.html GNU GPL
 *
 * @package SarosFramework
 * @author Eli White
 * @link http://sarosoftware.com
 * @link http://github.com/TheSavior/Saros-Framework
 */

// Lets turn on error reporting
error_reporting(E_ALL|E_STRICT);

define("ROOT_PATH",  realpath(dirname(__FILE__))."/");

//die(get_include_path());
// Autoload all of the classes that are not included

require_once('Library/Saros/Core/AutoLoader.php');
spl_autoload_register(array('Saros_Core_AutoLoader', 'autoload'));

/**
* This is an attempt to load files
* relative to where this index file resides
* it should be skipped if the Core_Autoloader works
* but, is needed if this resides outside of library root
*
*/
function autoload($classname)
{
	$filename = str_replace("_","/",$classname).".php";
	if(file_exists($filename))
	{
		require_once($filename);
	}
}

spl_autoload_register('autoload');
// Expect that autoloader is working now
set_exception_handler(array('Saros_Exception_Handler', 'handle'));

// Start the global session
Saros_Session::start();
/*
Create an output buffer. This is being used
so that we can at any point clear all output.
For example; our exception handler
does not display anything other than the exception
message.
*/
ob_start();

// Create a new registry of variables
$registry = new Saros_Core_Registry();

// Load up the core set of utilities
$registry->utils = new Saros_Core_Utilities();

// Create a new registry object to be used for configuration
$registry->config  = new Saros_Core_Registry();

// Load the router
$registry->router = new Saros_Core_Router();

$registry->display = Saros_Display::getInstance($registry);

// Get the current route
$registry->router->parseRoute();

// We want to setup our application
Application_Setup::setup($registry);

// Creates an instance of the class that will be
// Called to generate our page
$registry->router->createInstance($registry);

/**
 * Sets the view. This can be changed
 * at any time before the class is run
 */
$registry->router->getInstance()->setView($registry->display);

// Run the controller
$registry->router->run();

// Display our page
$registry->display->parse();