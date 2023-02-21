<?php
/**
 *
 * Guest Content Hide. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Andres, https://www.andreszsogon.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'GUESTCONTENTHIDE_TITLE'	=> 'Guest Content Hide',
	'GUESTCONTENTHIDE_CONFIG'	=> 'Settings',
));
