<?php
/**
 * @version $Id$
 * @copyright Center for History and New Media, 2007-2010
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @package Omeka
 */

require_once 'SimpleContactForm_TestCase.php';

/**
 * Test suite for SimpleContactForm.
 *
 * @package Omeka
 * @copyright Center for History and New Media, 2007-2010
 */
class SimpleContactForm_AllTests extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new SimpleContactForm_AllTests('SimpleContactForm Tests');
        $testCollector = new PHPUnit_Runner_IncludePathTestCollector(
          array(dirname(__FILE__) . '/integration')
        );
        $suite->addTestFiles($testCollector->collectTests());
        return $suite;
    }
}