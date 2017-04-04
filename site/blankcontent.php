<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Blankcontent
 * @author     Tony Partridge <tony@xws.im>
 * @copyright  2017 Tony Partridge - Xtech Web Services Ltd
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Blankcontent', JPATH_COMPONENT);
JLoader::register('BlankcontentController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Blankcontent');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
