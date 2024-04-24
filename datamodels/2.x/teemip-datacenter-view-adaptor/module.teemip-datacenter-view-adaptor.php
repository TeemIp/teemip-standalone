<?php
/**
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-datacenter-view-adaptor/1.0.0',
	array(
		// Identification
		//
		'label' => 'TeemIp adaptor to remove service objects from Molkobain Datacenter View',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'molkobain-datacenter-view/1.12.0',
		),
		'mandatory' => false,
		'visible' => false, // To prevent auto-install but shall not be listed in the install wizard
		'auto_select' => 'SetupInfo::ModuleIsSelected("molkobain-datacenter-view")',

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
