<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @copyright Tim Gatzky 2014
 * @author  Tim Gatzky <info@tim-gatzky.de>
 * @package  moofxslide
 * @link  http://contao.org
 * @license  http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Class ContentSlide
 * inherit from ContentAccordionStop
 */
class ContentFxSlideStop extends \ContentAccordionStop
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_fxslide_stop';

	/**
	 * Generate
	 */
	protected function compile()
	{
		// generate parent
		parent::compile();
	
		// Fx.Slide end
		if (TL_MODE == 'FE')
		{
			$this->strTemplate = 'ce_fxslide_stop';
			$this->Template = new \FrontendTemplate($this->strTemplate);
			$this->Template->setData($this->arrData);
		}
		else
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
		}
		
		$classes = deserialize($this->mooClasses);

		$this->Template->toggler = strlen($classes[0]) ? $classes[0] : 'slide_toggler';
		$this->Template->slide = strlen($classes[1]) ? $classes[1] : 'slide';
		$this->Template->headlineStyle = $this->mooStyle;
		$this->Template->headline = $this->mooHeadline;
	}
}
