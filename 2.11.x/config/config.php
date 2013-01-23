<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @copyright	Tim Gatzky 2012
 * @author		Tim Gatzky <info@tim-gatzky.de>
 * @package		
 * @link		http://contao.org
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Content elements
 */
//insert below accordion
$intPos = 0;
foreach($GLOBALS['TL_CTE']['texts'] as $ce)
{
	if($ce != 'accordion') $intPos++;
}
array_insert($GLOBALS['TL_CTE']['texts'],$intPos-1 ,array('moofxslide'=>'ContentFxSlide'));