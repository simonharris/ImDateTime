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
	 * @param ImDateTime $that
	 */
	public function diff(self $that)
	{
		return $this->_dt->diff($that->_getDateTimeObject());
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


	/**
	 * @param string $format
	 * @return string
	 */
	public function format($format)
	{
		return $this->_dt->format($format);
	}


	/**
	 * @return DateTime
	 */
	private function _getDateTimeObject()
	{
		return $this->_dt;
	}

}
