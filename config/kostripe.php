<?php defined('SYSPATH') or die('No direct script access.');

return array(
	// Stripe Secret API keys
	'test_key' => '',
	'live_key' => '',

	// Public Stripe API keys
	'public_test_key' => '',
	'public_live_key' => '',
	
	// Environment will choose which key to use [options are "test or "live"]
	'environment' => 'test',
);