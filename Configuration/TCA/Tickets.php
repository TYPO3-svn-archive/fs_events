<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_fsevents_domain_model_tickets'] = array(
	'ctrl' => $TCA['tx_fsevents_domain_model_tickets']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, type, url, tel, street, zip, city, country, text, formurl',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, type, url, tel, street, zip, city, country, text, formurl,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_fsevents_domain_model_tickets',
				'foreign_table_where' => 'AND tx_fsevents_domain_model_tickets.pid=###CURRENT_PID### AND tx_fsevents_domain_model_tickets.sys_language_uid IN (-1,0)',
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
			'exclude' => 0,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.type.default', ''),
                                        array('LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.type.link_extern', 'linkExtern'),
                                        array('LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.type.link_intern', 'linkIntern'),
                                        array('LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.type.address', 'address'),
                                        array('LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.type.text', 'text'),
				),
				//'size' => 1,
				//'maxitems' => 1,
				'eval' => ''
			),
		),
		'url' => array(
			'exclude' => 0,
                        'displayCond' => 'FIELD:type:=:linkExtern',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.url',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'tel' => array(
			'exclude' => 0,
                        'displayCond' => 'FIELD:type:=:address',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'street' => array(
			'exclude' => 0,
                        'displayCond' => 'FIELD:type:=:address',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.street',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zip' => array(
			'exclude' => 0,
                        'displayCond' => 'FIELD:type:=:address',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.zip',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'city' => array(
			'exclude' => 0,
                        'displayCond' => 'FIELD:type:=:address',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'country' => array(
			'exclude' => 0,
                        'displayCond' => 'FIELD:type:=:address',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.country',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'text' => array(
			'exclude' => 0,
                        'displayCond' => 'FIELD:type:=:text',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.text',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'formurl' => array(
			'exclude' => 1,
                        'displayCond' => 'FIELD:type:=:linkIntern',
			'label' => 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_tickets.formurl',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'item' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>