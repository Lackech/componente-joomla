<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_congreso
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Congreso Table class
 *
 * 
 */
class congresoTablecongresocat extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__congreso_category', 'catid', $db);
	}
}