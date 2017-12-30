<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the menu functions only once
JLoader::register('ModMegamenuHelper', __DIR__ . '/helper.php');

$list       = ModMegamenuHelper::getList($params);
$base       = ModMegamenuHelper::getBase($params);
$active     = ModMegamenuHelper::getActive($params);
$default    = ModMegamenuHelper::getDefault();
$active_id  = $active->id;
$default_id = $default->id;
$path       = $base->tree;
$showAll    = $params->get('showAllChildren');
$class_sfx  = htmlspecialchars($params->get('class_sfx'), ENT_COMPAT, 'UTF-8');

if (count($list))
{
	require JModuleHelper::getLayoutPath('mod_megamenu', $params->get('layout', 'megamenu'));
}
