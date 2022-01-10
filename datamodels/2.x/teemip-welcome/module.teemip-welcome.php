<?php
/**
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'teemip-welcome/3.0.0',
	array(
		// Identification
		//
		'label' => 'TeemIp skin',
		'category' => 'skin',
		
		// Setup
		//
		'dependencies' => array(
		),
		'mandatory' => true,
		'visible' => false,
		'installer' => 'TeemIpWelcomeInstaller',
		
		// Components
		//
		'datamodel' => array(
			'model.teemip-welcome.php',
		),
		'webservice' => array(
			//'webservices.itop-welcome-itil.php',
		),
		'data.struct' => array(
			//'data.struct.itop-welcome-itil.xml',
		),
		'data.sample' => array(
			//'data.sample.itop-welcome-itil.xml',
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',
		
		// Default settings
		//
		'settings' => array(
			//'some_setting' => 'some value',
		),
	)
);

if (!class_exists('TeemIpWelcomeInstaller'))
{
	// Module installation handler
	//
	class TeemIpWelcomeInstaller extends ModuleInstallerAPI
	{
		public static function BeforeWritingConfig(Config $oConfiguration)
		{
			// If you want to override/force some configuration values, do it here
			$oConfiguration->Set('app_icon_url', 'https://www.teemip.net/', 'first_install_or_update');
			$oConfiguration->Set('online_help', 'https://wiki.teemip.net/', 'first_install_or_update');
			return $oConfiguration;
		}

	}
}

