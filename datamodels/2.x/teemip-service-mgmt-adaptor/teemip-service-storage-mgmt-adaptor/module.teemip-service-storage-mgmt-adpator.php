<?php
/**
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-service-storage-mgmt-adaptor/1.0.0',
	array(
		// Identification
		//
		'label' => 'TeemIp adaptor to remove service objects from Storage Mgmt',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'teemip-storage-mgmt-adaptor/3.0.0',
		),
		'mandatory' => false,
		'visible' => true, // To prevent auto-install but shall not be listed in the install wizard
		'auto_select' => 'SetupInfo::ModuleIsSelected("teemip-storage-mgmt-adaptor")',

		// Components
		//
		'datamodel' => array(),
		'data.struct' => array(),
		'data.sample' => array(),

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
