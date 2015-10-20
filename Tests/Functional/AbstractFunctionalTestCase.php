<?php
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

namespace Causal\Extractor\Tests\Functional;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Abtract functional test class.
 */
class AbstractFunctionalTestCase extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

    /**
     * Returns a list of file names for fixture assets.
     *
     * @param string $type
     * @return array
     */
    protected function getFixtureAssets($type)
    {
        $fixturesPath = ExtensionManagementUtility::extPath('extractor') . 'Tests/Fixtures/' . $type . '/';
        $files = GeneralUtility::getFilesInDir($fixturesPath);

        $assets = array();
        foreach ($files as $file) {
            $assets[] = $fixturesPath . $file;
        }

        return $assets;
    }

}
