<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_congreso
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * congresoadmin View
 *
 * @since  0.0.1
 */
class congresoViewcongresocats extends JViewLegacy
{
	/**
	 * Display the congreso view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}
		//Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);
	}


	protected function addToolBar(){
		JToolbarHelper::title(JText::_('Menú de administración'));
		JToolbarHelper::addNew('congresocat.add');
		JToolbarHelper::editList('congresocat.edit');
		JToolbarHelper::deleteList('', 'congresocats.delete');
	}

}