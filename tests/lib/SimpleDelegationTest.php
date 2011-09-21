<?php
/**
 * SimpleDelegationTest class file
 *
 * @author Simon Harris
 * @package ImDateTime
 * @subpackage Tests
 */


/**
 * Quite a lot of functionality will simply be delegated to DateTime
 *
 * @package ImDateTime
 * @subpackage Tests
 */
class SimpleDelegationTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @todo This will fail when run outside the UK, perhaps make it configurable
	 */
	public function testGetTimezone()
	{
		$defaulttz = new DateTimeZone('Europe/London');

		$dt = new ImDateTime('2011-09-21');
		$this->assertEquals($defaulttz, $dt->getTimeZone());

		$casablanca = new DateTimeZone('Africa/Casablanca');

		$dt = new ImDateTime('2011-09-21 11:14:02', $casablanca);
		$this->assertEquals($casablanca, $dt->getTimeZone());
	}


	/**
	 * @todo
	 */
	public function testGetOffset()
	{
		// ...
	}

}
