<?php
/*
 * @copyright   Copyright (C) 2010-2025 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-communication-adaptor/1.0.0',
	array(
		// Identification
		//
		'label' => 'TeemIP adaptor for Communication extension',
		'category' => 'portal',

		// Setup
		//
		'dependencies' => array(
			'itop-communication/1.4.1',
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
