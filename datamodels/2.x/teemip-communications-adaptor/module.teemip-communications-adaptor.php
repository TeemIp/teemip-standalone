<?php
/*
 * @copyright   Copyright (C) 2010-2026 teemIP
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-communications-adaptor/1.0.0',
	array(
		// Identification
		//
		'label' => 'TeemIP adaptor for Communication extension',
		'category' => 'portal',

		// Setup
		//
		'dependencies' => array(
			'itop-communications/1.4.2',
		),
		'mandatory' => true,
		'visible' => false,

		// Components
		//
		'datamodel' => array(
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',

		// Default settings
		//
		'settings' => array(
		),
	)
);
