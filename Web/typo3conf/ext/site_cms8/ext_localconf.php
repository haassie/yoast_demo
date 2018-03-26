<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'YoastDemo',
    'constants',
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:site_cms8/Configuration/TypoScript/constants.typoscript">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'YoastDemo',
    'setup',
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:site_cms8/Configuration/TypoScript/setup.typoscript">'
);

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['site_cms8'] =
        \Haassie\SiteCms8\Hooks\RealUrlAutoConfiguration::class . '->addSiteConfiguration';
}