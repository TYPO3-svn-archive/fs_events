<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Events',
	array(
		'Event' => 'list, show',
		'Category' => 'list, show',
		'Location' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Category' => '',
		'Event' => '',
		'Location' => '',
		
	)
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Freesh Events');

?>