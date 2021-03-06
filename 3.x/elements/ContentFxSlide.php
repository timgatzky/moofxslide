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
		
		$classes = deserialize($this->mooClasses);

		$this->Template->toggler = strlen($classes[0]) ? $classes[0] : 'slide_toggler';
		$this->Template->slide = strlen($classes[1]) ? $classes[1] : 'slide';
		$this->Template->headlineStyle = $this->mooStyle;
		$this->Template->headline = $this->mooHeadline;
	}
}
