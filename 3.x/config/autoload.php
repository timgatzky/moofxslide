<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Moofxslide
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentFxSlide' 		=> 'system/modules/moofxslide/elements/ContentFxSlide.php',
	'ContentFxSlideStart' 	=> 'system/modules/moofxslide/elements/ContentFxSlideStart.php',
	'ContentFxSlideStop' 	=> 'system/modules/moofxslide/elements/ContentFxSlideStop.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_fxslide'       => 'system/modules/moofxslide/templates',
	'ce_fxslide_start' => 'system/modules/moofxslide/templates',
	'ce_fxslide_stop'  => 'system/modules/moofxslide/templates',
	'moo_fxslide'      => 'system/modules/moofxslide/templates',
));
