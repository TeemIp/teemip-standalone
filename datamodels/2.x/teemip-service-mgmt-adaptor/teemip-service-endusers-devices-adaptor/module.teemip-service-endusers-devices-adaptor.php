<?php
/**
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-service-endusers-devices-mgmt-adaptor/1.0.0',
	array(
		// Identification
		//
		'label' => 'TeemIp adaptor to remove service objects from Endusers Devices Mgmt',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'teemip-endusers-devices-adaptor/3.0.0',
		),
		'mandatory' => false,
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