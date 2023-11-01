<?php
/**
 * @copyright   Copyright (C) 2023 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-profiles-itil-adaptor/3.1.1',
	array(
		// Identification
		//
		'label' => 'TeemIp adaptor for iTop ITIL Profiles',
		'category' => 'create_profiles',

		// Setup
		//
		'dependencies' => array(
			'itop-profiles-itil/3.1.0',
			'teemip-ip-mgmt/3.1.0',
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
