<?php 

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
array_insert($GLOBALS['TL_CTE'],2,array
(
	'moofxslide'	=> array
	(
		'moofxslideSingle'	=> 'ContentFxSlide',
		'moofxslideStart'	=> 'ContentFxSlideStart',
		'moofxslideStop'	=> 'ContentFxSlideStop'
	)
));

$GLOBALS['TL_WRAPPERS']['start'][] 	= 'moofxslideStart';
$GLOBALS['TL_WRAPPERS']['stop'][] 	= 'moofxslideStop';