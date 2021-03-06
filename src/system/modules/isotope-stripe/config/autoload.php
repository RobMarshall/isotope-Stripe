<?php

/**
 * Wirecard Payment Module for Isotope eCommerce for Contao Open Source CMS
 *
 *
 * @copyright  Wangaz. GbR 2014
 * @author     Wangaz. GbR <hallo@wangaz.com>
 * @package    isotope-wirecard
 */


/**
 * Register PSR-0 namespace
 */
if (class_exists('NamespaceClassLoader')) {
	NamespaceClassLoader::add('Isotope', 'system/modules/isotope-stripe/library');
}


/**
 * Register the templates
 */
TemplateLoader::addFiles(array(
	'iso_payment_wirecard'	=> 'system/modules/isotope-stripe/templates'
));
