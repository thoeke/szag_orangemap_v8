<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
        ],
		'searchFields' => 'title,adress,zipcode,website,longitude,latitude,city,company,nation,businessunit',
        'iconfile' => 'EXT:szag_orangemap/Resources/Public/Icons/tx_szagorangemap_domain_model_markers.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'hidden, title, adress, zipcode, website, longitude, latitude, city, company, nation, businessunit',
    ],
    'types' => [
		'1' => ['showitem' => 'hidden, title, adress, zipcode, website, longitude, latitude, city, company, nation, businessunit'],
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
        'title' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'adress' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.adress',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'zipcode' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.zipcode',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'website' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.website',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'longitude' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.longitude',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'latitude' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.latitude',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'city' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.city',
	        'config' => [
			    'type' => 'select',
                            'renderType' => 'selectSingle',
                            'foreign_table' => 'tx_szagorangemap_domain_model_cities',
                            'minitems' => 0,
                            'maxitems' => 1
			],
	    ],
	    'company' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.company',
	        'config' => [
			    'type' => 'select',
                            'renderType' => 'selectSingle',
                            'foreign_table' => 'tx_szagorangemap_domain_model_companies',
                            'minitems' => 0,
                            'maxitems' => 1
			],
	    ],
	    'nation' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.nation',
	        'config' => [
			    'type' => 'select',
                            'renderType' => 'selectSingle',
                            'foreign_table' => 'tx_szagorangemap_domain_model_nations',
                            'minitems' => 0,
                            'maxitems' => 1
			],
	    ],
	    'businessunit' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_markers.businessunit',
	        'config' => [
			    'type' => 'select',
                            'renderType' => 'selectSingle',
                            'foreign_table' => 'tx_szagorangemap_domain_model_businessunit',
                            'minitems' => 0,
                            'maxitems' => 1
			],
	    ],
    ],
];
