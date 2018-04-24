<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_companies',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
        ],
		'searchFields' => 'title',
        'iconfile' => 'EXT:szag_orangemap/Resources/Public/Icons/tx_szagorangemap_domain_model_companies.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'hidden, title',
    ],
    'types' => [
		'1' => ['showitem' => 'hidden, title'],
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
	        'label' => 'LLL:EXT:szag_orangemap/Resources/Private/Language/locallang_db.xlf:tx_szagorangemap_domain_model_companies.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
    ],
];
