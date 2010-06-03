<?php
class Tests_AllTests
{
    public static function main()
    {
    	//$parameters = array('verbose' => true);
        PHPUnit_TextUI_TestRunner::run(self::suite());//, $parameters);

    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('WhiteBoard Suite');

		// Add the Spot TestSuite
		//require_once('Tests/Auth/Adapter/Spot.php');
		//$suite->addTestSuite("Tests_Auth_Adapter_Spot");

        //$suite->addTestSuite(Spot_Tests::suite());

        $it = new RecursiveIteratorIterator(
        		new RecursiveDirectoryIterator(dirname(__FILE__) . '/Test'));

        for ($it->rewind(); $it->valid(); $it->next())
        {
            // Something like: Test\Application\Modules\Main\Logic\Index.php
            $path =  "Test\\".$it->getInnerIterator()->getSubPathname();

            // Replace all of the \ with _
            $className = str_replace('\\', "_", $path);
            // Take off the extension
            $className = substr($className, 0, -4);

            require_once($path);
            $suite->addTestSuite($className);

            //echo $className."\n\n";

            //$className = $it->current()->getBasename('.php');
            //echo "Class: ".$className."\n";
            //$suite->addTest($className::suite());
        }

        return $suite;
    }
}