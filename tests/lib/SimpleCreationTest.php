<?php
/**
 * SimpleCreationTest
 *
 * @author Simon Harris
 * @package ImDateTime
 * @subpackage Tests
 */


/**
 * Run through some basic functionality to prove that we haven't completely
 * clobbered DateTime's behaviour
 *
 * @package ImDateTime
 * @subpackage Tests
 */
class SimpleCreationTest extends PHPUnit_Framework_TestCase
{

	public function testCreation()
	{
		$dt = new ImDateTime('2011-09-21');
		$this->assertEquals(1316559600, $dt->getTimestamp());

		$dt = new ImDateTime('2011-09-21 11:14:02');
		$this->assertEquals(1316600042, $dt->getTimestamp());
	}


	public function testCreationWithTimezone()
	{
		$dt = new ImDateTime('2011-09-21', new DateTimeZone('Europe/London'));
		$this->assertEquals(1316559600, $dt->getTimestamp());

		$dt = new ImDateTime('2011-09-21 11:14:02', new DateTimeZone('Europe/London'));
		$this->assertEquals(1316600042, $dt->getTimestamp());

		$dt = new ImDateTime('2011-09-21 11:14:02', new DateTimeZone('Africa/Casablanca'));
		$this->assertEquals(1316603642, $dt->getTimestamp());
	}

}
