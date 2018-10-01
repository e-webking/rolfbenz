<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$TCA['tt_content']['columns']['imagewidth']['config']['range']['upper'] = 1920;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Rolf-Benz Template');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:armrolftpl/Configuration/TypoScript/TsConfig/pageTs.txt">');
