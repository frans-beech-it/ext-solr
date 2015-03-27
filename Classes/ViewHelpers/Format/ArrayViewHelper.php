<?php
namespace ApacheSolrForTypo3\Solr\ViewHelpers\Format;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class ArrayViewHelper
 */
class ArrayViewHelper extends AbstractViewHelper {

	/**
	 * Make sure values is a array else convert
	 *
	 * @param string|array $value
	 * @return array
	 */
	public function render($value) {
		return (array)$value;
	}
}