<?php
/**
 * ImDateTime class file
 *
 * @author Simon Harris
 * @package ImDateTime
 * @subpackage Lib
 */

/**
 * An example of how an immutable PHP DateTime class might work, based on the
 * Value Object pattern
 *
 * @package ImDateTime
 * @subpackage Lib
 */
class ImDateTime
{

	/**
	 * We'll delegate to a real DateTime to do the hard bits
	 *
	 * @var DateTime
	 */
	private $_dt;


	/**
	 * @param string $time = "now"
	 * @param DateTimeZone $timezone = NULL
	 */
	public function __construct($time = 'now', DateTimeZone $timezone = NULL)
	{
		$this->_dt = new DateTime($time, $timezone);
	}


	/**
	 * @param DateInterval $interval The amount of time to add
	 */
	public function add(DateInterval $interval)
	{
		$clone = clone($this->_dt);
		$clone->add($interval);
		return $clone;
	}


	/**
	 * @param DateInterval $interval The amount of time to add
	 */
	public function sub(DateInterval $interval)
	{
		$clone = clone($this->_dt);
		$clone->sub($interval);
		return $clone;
	}


	/**
	 * @return int
	 */
	 public function getTimestamp()
	 {
		return $this->_dt->getTimestamp();
	 }


	/**
	 * @return DateTimeZone
	 */
	public function getTimezone()
	{
		return $this->_dt->getTimezone();
	}


	/**
	 * @return int
	 */
	public function getOffset()
	{
		return $this->_dt->getOffset();
	}

}
