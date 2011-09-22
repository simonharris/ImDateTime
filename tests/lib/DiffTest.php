<?php
/**
 * DiffTest class file
 *
 * @author Simon Harris
 * @package ImDateTime
 * @subpackage Tests
 */


/**
 * Ensure ImDateTime::diff behaves the same as DateTime::diff
 *
 * @package ImDateTime
 * @subpackage Tests
 */
class DiffTest extends PHPUnit_Framework_TestCase
{

	/**
	 * If we break format(), all is lost
	 */
	public function testDiff()
	{
		$datetime1 = new ImDateTime('2009-10-11');
		$datetime2 = new ImDateTime('2009-10-13');
		$interval  = $datetime1->diff($datetime2);
		$this->assertEquals('+2 days', $interval->format('%R%a days'));
	}

}
