<?php

/**
 * Stripe Payment Module for Isotope eCommerce for Contao Open Source CMS
 *
 *
 * @copyright  Wangaz. GbR 2014
 * @author     Wangaz. GbR <hallo@wangaz.com>
 * @package    isotope-wirecard
 */

array_insert($GLOBALS['TL_LANG']['tl_iso_payment'], 0, array(
	'wirecard_customer_id' 			=> array('Customer ID', 'Your "customerId" at Stripe'),
	'wirecard_secret' 				=> array('Secret', 'Your "secret" at Stripe'),
	'wirecard_contact'				=> array('Contact', 'Please select the page which contains your contact information'),
));
