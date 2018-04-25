<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'PierraaGroup.' . $_EXTKEY,
	'Szagorangemap',
	[
            'Map' => 'list, show',
            'Markers' => 'list'
	],
	// non-cacheable actions
	[
            'Map' => 'list, show'
	]
);
