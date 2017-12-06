<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_odaextendfeusers_anrede' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_anrede',		
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_anrede.I.0', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_anrede.I.1', '1'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_anrede.I.2', '2'),
			),
			'size' => 1,	
			'maxitems' => 1,
		)
	),
	'tx_odaextendfeusers_vorname' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_vorname',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '32',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_geburtsdatum' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_geburtsdatum',		
		'config' => array (
			'type'     => 'input',
			'size'     => '8',
			'max'      => '20',
			'eval'     => 'date',
			'checkbox' => '0',
			'default'  => '0'
		)
	),
	'tx_odaextendfeusers_strasse' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_strasse',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '32',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_postfach' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_postfach',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '32',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_land' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_land',		
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_land.I.0', '1'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_land.I.1', '2'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_land.I.2', '3'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_land.I.3', '4'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_land.I.4', '5'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_land.I.5', '6'),
			),
			'size' => 1,	
			'maxitems' => 1,
		)
	),
	'tx_odaextendfeusers_ausbildungsstand' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand',		
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand.I.0', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand.I.1', '1'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand.I.2', '2'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand.I.3', '3'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand.I.4', '4'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand.I.5', '5'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_ausbildungsstand.I.6', '6'),
			),
			'size' => 1,	
			'maxitems' => 1,
		)
	),
	'tx_odaextendfeusers_bildungsinstitution' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_bildungsinstitution',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '64',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_funktion_abteilung' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_funktion_abteilung',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '64',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_kanton' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_kanton',		
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_kanton.I.0', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_kanton.I.1', '1'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_kanton.I.2', '2'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_kanton.I.3', '3'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_kanton.I.4', '4'),
			),
			'size' => 1,	
			'maxitems' => 1,
		)
	),
	'tx_odaextendfeusers_region' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region',		
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.0', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.1', '1'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.2', '2'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.26', '26'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.3', '3'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.4', '4'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.5', '5'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.6', '6'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.7', '7'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.8', '8'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.9', '9'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.10', '10'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.11', '11'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.12', '12'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.13', '13'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.14', '14'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.15', '15'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.16', '16'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.17', '17'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.18', '18'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.19', '19'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.20', '20'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.21', '21'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.22', '22'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.23', '23'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.24', '24'),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_region.I.25', '25'),
			),
			'size' => 1,	
			'maxitems' => 1,
		)
	),
	'tx_odaextendfeusers_beschreibung' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_beschreibung',		
		'config' => array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
					'icon'          => 'wizard_rte2.gif',
					'script'        => 'wizard_rte.php',
				),
			),
		)
	),
	'tx_odaextendfeusers_betriebsart' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart',		
		'config' => array (
			'type' => 'check',
			'cols' => 4,
			'items' => array (
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.0', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.1', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.2', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.3', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.4', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.5', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.6', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.7', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.8', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.9', ''),
				array('LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_betriebsart.I.10', ''),
			),
		)
	),
	'tx_odaextendfeusers_agb' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_agb',		
		'config' => array (
			'type' => 'check',
		)
	),
	'tx_odaextendfeusers_longitude' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_longitude',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_latitude' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_latitude',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_adresszusatz' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_adresszusatz',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '32',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_code' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_code',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '32',	
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_uid_gef' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_uid_gef',
		'config' => array (
			'type' => 'input',
			'size' => '30',
			'max' => '32',
			'eval' => 'trim',
		)
	),
	'tx_odaextendfeusers_bur_nummer' => array (
	'exclude' => 0,
	'label' => 'LLL:EXT:oda_extend_fe_users/locallang_db.xml:fe_users.tx_odaextendfeusers_bur_nummer',
	'config' => array (
		'type' => 'input',
		'size' => '30',
		'max' => '32',
		'eval' => 'trim',
		)
	),
);

t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('fe_users','tx_odaextendfeusers_anrede;;;;1-1-1, tx_odaextendfeusers_land;;;;1-1-1, tx_odaextendfeusers_vorname, tx_odaextendfeusers_geburtsdatum, tx_odaextendfeusers_strasse, tx_odaextendfeusers_postfach, tx_odaextendfeusers_ausbildungsstand, tx_odaextendfeusers_bildungsinstitution, tx_odaextendfeusers_funktion_abteilung, tx_odaextendfeusers_kanton, tx_odaextendfeusers_region, tx_odaextendfeusers_beschreibung;;;richtext[]:rte_transform[mode=ts_css], tx_odaextendfeusers_betriebsart, tx_odaextendfeusers_agb, tx_odaextendfeusers_longitude, tx_odaextendfeusers_latitude, tx_odaextendfeusers_adresszusatz, tx_odaextendfeusers_code, tx_odaextendfeusers_uid_gef, tx_odaextendfeusers_bur_nummer');

?>