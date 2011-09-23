<?php
/**
 * CreateFromFormatTest class file
 *
 * @author Simon Harris
 * @package ImDateTime
 * @subpackage Tests
 */


/**
 * @package ImDateTime
 * @subpackage Tests
 */
class CreateFromFormatTest extends PHPUnit_Framework_TestCase
{

	public function testCreateFromFormat()
	{
		$date = ImDateTime::createFromFormat('j-M-Y', '15-Feb-2009');
		$this->assertEquals('2009-02-15', $date->format('Y-m-d'));
	}

}
