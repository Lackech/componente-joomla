<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_congreso
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by congreso
$controller = JControllerLegacy::getInstance('congreso');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();