<?php
namespace FluidTYPO3\Flux\Tests\Unit\Form\Wizard;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use FluidTYPO3\Flux\Form\Wizard\Suggest;

/**
 * @package Flux
 */
class SuggestTest extends AbstractWizardTest {

	/**
	 * @test
	 */
	public function canUseCommaSeparatedStoragePageUids() {
		/** @var Suggest $wizard */
		$wizard = $this->createInstance();
		$storagePageUidsCommaSeparated = '1,2,3';
		$storagePageUidsArray = GeneralUtility::trimExplode(',', $storagePageUidsCommaSeparated);
		$wizard->setStoragePageUids($storagePageUidsCommaSeparated);
		$this->assertSame($storagePageUidsArray, $wizard->getStoragePageUids());
		$this->performTestBuild($wizard);
	}

	/**
	 * @test
	 */
	public function canUseArrayStoragePageUids() {
		/** @var Suggest $wizard */
		$wizard = $this->createInstance();
		$storagePageUidsCommaSeparated = '1,2,3';
		$storagePageUidsArray = GeneralUtility::trimExplode(',', $storagePageUidsCommaSeparated);
		$wizard->setStoragePageUids($storagePageUidsArray);
		$this->assertSame($storagePageUidsArray, $wizard->getStoragePageUids());
		$this->performTestBuild($wizard);
	}

}