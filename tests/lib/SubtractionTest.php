<?php
/**
 * SubtractionTest class file
 *
 * @author Simon Harris
 * @package ImDateTime
 * @subpackage Tests
 */


/**
 * This is where we start to vary from DateTime behaviour
 *
 * @package ImDateTime
 * @subpackage Tests
 */
class SubtractionTest extends PHPUnit_Framework_TestCase
{

	public function testSubtractionTest()
	{
		$starttime = 1316559500;

		$startdt = new ImDateTime("@$starttime", new DateTimeZone('Europe/London'));

		// Subtract 30 seconds
		$interval = new DateInterval('PT30S');
		$newdt = $startdt->sub($interval);

		$this->assertEquals(($starttime - 30), $newdt->getTimestamp());

		// Sanity check that the old one is unmodified
		$this->assertEquals($starttime, $startdt->getTimestamp());
	}
	
}
