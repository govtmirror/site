<?php
/**
* @version		$Id: mod_breadcrumbs_adv.php 10381 2008-06-01 03:35:53Z pasamio $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

// Get the breadcrumbs
$list	= modBreadCrumbsAdvHelper::getList($params);
$count	= count($list);

// Set the default separator
$separator = modBreadCrumbsAdvHelper::setSeparator( $params->get( 'separator' ));

require(JModuleHelper::getLayoutPath('mod_breadcrumbs_advanced'));