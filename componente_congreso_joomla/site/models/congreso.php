<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_congreso
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * congreso Model
 *
 * @since  0.0.1
 */
class congresoModelcongreso extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;

	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'Hola esta es una prueba';
		}

		return $this->message;
	}
}