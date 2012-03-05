<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Events',
	'Events'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Events');

			t3lib_extMgm::addLLrefForTCAdescr('tx_fsevents_domain_model_category', 'EXT:fs_events/Resources/Private/Language/locallang_csh_tx_fsevents_domain_model_category.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_fsevents_domain_model_category');
			$TCA['tx_fsevents_domain_model_category'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_category',
					'label' => 'title',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fsevents_domain_model_category.gif'
				),
			);

			t3lib_extMgm::addLLrefForTCAdescr('tx_fsevents_domain_model_event', 'EXT:fs_events/Resources/Private/Language/locallang_csh_tx_fsevents_domain_model_event.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_fsevents_domain_model_event');
			$TCA['tx_fsevents_domain_model_event'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_event',
					'label' => 'title',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Event.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fsevents_domain_model_event.gif'
				),
			);

			t3lib_extMgm::addLLrefForTCAdescr('tx_fsevents_domain_model_location', 'EXT:fs_events/Resources/Private/Language/locallang_csh_tx_fsevents_domain_model_location.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_fsevents_domain_model_location');
			$TCA['tx_fsevents_domain_model_location'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_location',
					'label' => 'title',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Location.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fsevents_domain_model_location.gif'
				),
			);

			t3lib_extMgm::addLLrefForTCAdescr('tx_fsevents_domain_model_status', 'EXT:fs_events/Resources/Private/Language/locallang_csh_tx_fsevents_domain_model_status.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_fsevents_domain_model_status');
			$TCA['tx_fsevents_domain_model_status'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:fs_events/Resources/Private/Language/locallang_db.xml:tx_fsevents_domain_model_status',
					'label' => 'title',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Status.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fsevents_domain_model_status.gif'
				),
			);

?>