<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_fsevents_domain_model_event'] = array(
	'ctrl' => $TCA['tx_fsevents_domain_model_event']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, image, description, event_start_date, event_end_date, price, tickets, category, location, status',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, image, description, event_start_date, event_end_date, price, tickets, category, location, status,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_fsevents_domain_model_event',
				'foreign_table_where' => 'AND tx_fsevents_domain_model_event.pid=###CURRENT_PID### AND tx_fsevents_domain_model_event.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_fsevents',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext[]',
		),
		'event_start_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.event_start_date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'event_end_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.event_end_date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'price' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
            /*
		'ticket_link' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.ticket_link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),*/
        'tickets' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.tickets',
			'config' => array(
                                'type' => 'inline',
                                'foreign_table' => 'tx_fsevents_domain_model_tickets',
                                'foreign_field' => 'event',
                                'maxitems' => 9999,
                                'appearance' => array(
                                        'collabse' => 0,
                                        'levelLinksPosition' => 'top',
                                        'showSynchronizationLink' => 1,
                                        'showPossibleLocalisationRecords' => 1,
                                        'showAllLocalisationLink' => 1
                                ),
			),
		),
		'category' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.category',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_fsevents_domain_model_category',
				'MM' => 'tx_fsevents_event_category_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_fsevents_domain_model_category',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'location' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.location',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_fsevents_domain_model_location',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'status' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.status',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_fsevents_domain_model_status',
                                'items' => array(
                                    array('LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event.status.default', 0)
                                ),
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
	),
);

?>