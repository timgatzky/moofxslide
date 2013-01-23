<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @copyright Tim Gatzky 2012
 * @author  Tim Gatzky <info@tim-gatzky.de>
 * @package  moofxslide
 * @link  http://contao.org
 * @license  http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Class ContentSlide
 * inherit from ContentAccordion
 */
class ContentFxSlide extends \ContentAccordion
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_fxslide';

	/**
	 * Generate
	 */
	protected function compile()
	{
		// generate parent
		parent::compile();

		// Fx.Slide start
		if ($this->mooType == 'moofxslideStart')
		{
			if (TL_MODE == 'FE')
			{
				$this->strTemplate = 'ce_fxslide_start';
				$this->Template = new FrontendTemplate($this->strTemplate);
				$this->Template->setData($this->arrData);
			}
			else
			{
				$this->strTemplate = 'be_wildcard';
				$this->Template = new BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### SLIDE WRAPPER START ###';
				$this->Template->title = $this->mooHeadline;
			}
		}

		// Fx.Slide end
		elseif ($this->mooType == 'moofxslideStop')
		{
			if (TL_MODE == 'FE')
			{
				$this->strTemplate = 'ce_fxslide_stop';
				$this->Template = new FrontendTemplate($this->strTemplate);
				$this->Template->setData($this->arrData);
			}
			else
			{
				$this->strTemplate = 'be_wildcard';
				$this->Template = new BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### SLIDE WRAPPER END ###';
			}
		}

		$classes = deserialize($this->mooClasses);

		$this->Template->toggler = strlen($classes[0]) ? $classes[0] : 'slide_toggler';
		$this->Template->slide = strlen($classes[1]) ? $classes[1] : 'slide';
		$this->Template->headlineStyle = $this->mooStyle;
		$this->Template->headline = $this->mooHeadline;
	}
}
