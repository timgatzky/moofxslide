<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @copyright	Tim Gatzky 2012
 * @author		Tim Gatzky <info@tim-gatzky.de>
 * @package		moofxslide
 * @link		http://contao.org
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Callbacks
 */
#$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_fxslide', 'setLabels');

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslideSingle'] 	= $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionSingle'];
$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslideStart'] 	= $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStart'];
$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslideStop'] 		= $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStop'];

// Backwards compatibility
if (version_compare(VERSION, '3.2', '<'))
{
	$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslide'] 			= $GLOBALS['TL_DCA']['tl_content']['palettes']['accordion'];
	$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslideSingle'] 	= $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionmooSingle'];
	$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslideStart'] 	= $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionmooStart'];
	$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslideStop'] 		= $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionmooStop'];
}

/**
 * Class tl_content_fxslide
 */
class tl_content_fxslide extends \Backend
{
	/**
	 * Set labels
	 * @param object
	 */
	public function setLabels(DataContainer $dc)
	{
		$objCE = \Database::getInstance()->prepare("SELECT * FROM tl_content WHERE id=?")->limit(1)	->execute($dc->id);
		if($objCE->type == 'moofxslide')
		{
			// Fields
			$GLOBALS['TL_DCA']['tl_content']['fields']['mooType']['default'] = 'moofxslideStart';
			$GLOBALS['TL_DCA']['tl_content']['fields']['mooType']['options'] = array('moofxslideStart', 'moofxslideStop', 'moofxslideSingle');
			
			// Languages
			$GLOBALS['TL_LANG']['tl_content']['mooType'] = $GLOBALS['TL_LANG']['tl_content']['mooType_slide'];
			$GLOBALS['TL_LANG']['tl_content']['mooSingle'] = $GLOBALS['TL_LANG']['tl_content']['slidesingle'];
			$GLOBALS['TL_LANG']['tl_content']['mooStart'] = $GLOBALS['TL_LANG']['tl_content']['slidestart'];
			$GLOBALS['TL_LANG']['tl_content']['mooStop'] = $GLOBALS['TL_LANG']['tl_content']['slidestart'];
			$GLOBALS['TL_LANG']['tl_content']['mooHeadline'] = $GLOBALS['TL_LANG']['tl_content']['mooHeadline_slide'];
			$GLOBALS['TL_LANG']['tl_content']['moo_legend'] = $GLOBALS['TL_LANG']['tl_content']['moo_slide_legend'];
		}
	}


}