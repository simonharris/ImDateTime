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
	 * Examples straight from the PHP manual
	 *
	 * @link http://uk3.php.net/manual/en/datetime.getoffset.php
	 */
	public function testGetOffset()
	{
		$winter = new ImDateTime('2010-12-21', new DateTimeZone('America/New_York'));
		$this->assertEquals(-18000, $winter->getOffset());

		$summer = new ImDateTime('2008-06-21', new DateTimeZone('America/New_York'));
		$this->assertEquals(-14400, $summer->getOffset());
	}

}
