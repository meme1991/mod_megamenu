<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;

$attributes = array();

$flink  = JFilterOutput::ampReplace(htmlspecialchars($item->flink));

if ($item->anchor_title)
	$attributes['title'] = $item->anchor_title;
else
	$attributes['title'] = $item->title;

$attributes['class'] = 'dropdown-item';
if ($item->anchor_css)
	$attributes['class'] .= ' '.trim($item->anchor_css);

if ($item->anchor_rel)
	$attributes['rel'] = $item->anchor_rel;

switch ($item->browserNav) {
	case   1: $attributes['target'] = '_blank'; break;
	case   2: $attributes['target'] = '_parent'; break;
}

if ($accesskey)
	$attributes['accesskey'] = $accesskey;

// costruisco il titolo del links se ci sono delle icone
$title = $item->title;
if($iconYN AND $pos == 1)
	$title = '<i class="'.$icon.' mr-1"></i>'.$item->title;
elseif($iconYN AND $pos == 0)
	$title = $item->title.'<i class="'.$icon.' ml-1"></i>';
?>
<?php echo JHtml::_('link', JFilterOutput::ampReplace(htmlspecialchars($flink, ENT_COMPAT, 'UTF-8', false)), $title, $attributes); ?>
