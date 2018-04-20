<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,adress,zipcode,website,longitude,latitude,city,company,nation,businessunit,',
		'iconfile' => 'EXT:szag_orangemap/Resources/Public/Icons/tx_szagorangemap_domain_model_markers.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, adress, zipcode, website, longitude, latitude, city, company, nation, businessunit',
	),
        'types' => array(
		'1' => array(
                    'columnOverrides' => array(
                        'sys_language_uid' => array(
                            'defaultExtras' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, adress, zipcode, website, longitude, latitude, city, company, nation, businessunit, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'
                        )
                    )
                )                    
        ),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_szagorangemap_domain_model_markers',
				'foreign_table_where' => 'AND tx_szagorangemap_domain_model_markers.pid=###CURRENT_PID### AND tx_szagorangemap_domain_model_markers.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime',
                            'renderType' => 'inputDateTime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime',
                            'renderType' => 'inputDateTime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'adress' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.adress',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zipcode' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.zipcode',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'website' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.website',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'longitude' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.longitude',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'latitude' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.latitude',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.city',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_szagorangemap_domain_model_cities',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'company' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.company',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_szagorangemap_domain_model_companies',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'nation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.nation',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_szagorangemap_domain_model_nations',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'businessunit' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.businessunit',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_szagorangemap_domain_model_businessunit',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);