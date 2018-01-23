<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

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
