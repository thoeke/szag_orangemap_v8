<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'PierraaDesign.' . $_EXTKEY,
	'Szagorangemap',
	'Orangemap'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Orangemap');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_szagorangemap_domain_model_businessunit', 'EXT:szag_orangemap/Resources/Private/Language/locallang_csh_tx_szagorangemap_domain_model_businessunit.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_szagorangemap_domain_model_businessunit');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_szagorangemap_domain_model_cities', 'EXT:szag_orangemap/Resources/Private/Language/locallang_csh_tx_szagorangemap_domain_model_cities.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_szagorangemap_domain_model_cities');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_szagorangemap_domain_model_companies', 'EXT:szag_orangemap/Resources/Private/Language/locallang_csh_tx_szagorangemap_domain_model_companies.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_szagorangemap_domain_model_companies');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_szagorangemap_domain_model_markers', 'EXT:szag_orangemap/Resources/Private/Language/locallang_csh_tx_szagorangemap_domain_model_markers.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_szagorangemap_domain_model_markers');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_szagorangemap_domain_model_nations', 'EXT:szag_orangemap/Resources/Private/Language/locallang_csh_tx_szagorangemap_domain_model_nations.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_szagorangemap_domain_model_nations');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_szagorangemap_domain_model_standort', 'EXT:szag_orangemap/Resources/Private/Language/locallang_csh_tx_szagorangemap_domain_model_standort.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_szagorangemap_domain_model_standort');
