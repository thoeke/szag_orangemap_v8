<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_standort',
        'label' => 'location',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
        ],
		'searchFields' => 'title',
        'iconfile' => 'EXT:szag_orangemap/Resources/Public/Icons/tx_szagorangemap_domain_model_standort.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, location, locationdesc, business, lat, lng, country',
    ],
    'types' => [
		'1' => ['showitem' => 'hidden, location, locationdesc, business, lat, lng, country'],
    ],
    'columns' => [
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'location' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_nations.location',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
        'locationdesc' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_nations.locationdesc',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
        'business' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_nations.business',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
        'lat' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_nations.lat',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
        'lng' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_nations.lng',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
        'country' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_nations.country',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
    ],
];
