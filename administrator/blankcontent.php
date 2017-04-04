<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Blankcontent
 * @author     Tony Partridge <tony@xws.im>
 * @copyright  2017 Tony Partridge - Xtech Web Services Ltd
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_blankcontent'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Blankcontent', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Blankcontent');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
