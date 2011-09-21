<?php
/**
 * AdditionTest class file
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
class AdditionTest extends PHPUnit_Framework_TestCase
{

	public function testAddition()
	{
		$starttime = 1316559600;

		$startdt = new ImDateTime("@$starttime", new DateTimeZone('Europe/London'));

		// Add 10 seconds
		$interval = new DateInterval('PT10S');
		$newdt = $startdt->add($interval);

		$this->assertEquals(($starttime + 10), $newdt->getTimestamp());

		// Sanity check that the old one is unmodified
		$this->assertEquals($starttime, $startdt->getTimestamp());
	}
}
