<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'PierraaGroup.' . $_EXTKEY,
	'Szagorangemap',
	array(
        'Map' => 'list, show',
		'Businessunit' => 'list, show, new, create, edit, update, delete',
		'Cities' => 'list, show, new, create, edit, update, delete',
		'Companies' => 'list, show, new, create, edit, update, delete',
		'Markers' => 'list, show, new, create, edit, update, delete',
		'Nations' => 'list, show, new, create, edit, update, delete',
		'Standort' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
        'Map' => 'list, show',
		'Businessunit' => 'create, update, delete',
		'Cities' => 'create, update, delete',
		'Companies' => 'create, update, delete',
		'Markers' => 'create, update, delete',
		'Nations' => 'create, update, delete',
		'Standort' => 'create, update, delete',
		
	)
);
