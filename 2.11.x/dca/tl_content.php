<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_fxslide', 'setLabels');

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslide'] = $GLOBALS['TL_DCA']['tl_content']['palettes']['accordion'];
$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslidesingle'] = $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionsingle'];
$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslidestart'] = $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionstart'];
$GLOBALS['TL_DCA']['tl_content']['palettes']['moofxslidestop'] = $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionstop'];

/**
 * Class tl_content_slide
 */
class tl_content_fxslide extends Backend
{
	/**
	 * Set labels
	 * @param object
	 */
	public function setLabels(DataContainer $dc)
	{
		$objCE = $this->Database->prepare("SELECT * FROM tl_content WHERE id=?")
						->limit(1)
						->execute($dc->id);
		if($objCE->type == 'moofxslide')
		{
			// Fields
			$GLOBALS['TL_LANG']['tl_content']['mooType'] = $GLOBALS['TL_LANG']['tl_content']['mooType_slide'];
			$GLOBALS['TL_LANG']['tl_content']['single'] = $GLOBALS['TL_LANG']['tl_content']['slidesingle'];
			$GLOBALS['TL_LANG']['tl_content']['start'] = $GLOBALS['TL_LANG']['tl_content']['slidestart'];
			$GLOBALS['TL_LANG']['tl_content']['stop'] = $GLOBALS['TL_LANG']['tl_content']['slidestop'];
			$GLOBALS['TL_LANG']['tl_content']['mooHeadline'] = $GLOBALS['TL_LANG']['tl_content']['mooHeadline_slide'];
			
			// Legends
			$GLOBALS['TL_LANG']['tl_content']['moo_legend'] = $GLOBALS['TL_LANG']['tl_content']['moo_slide_legend'];
		}
	}
}