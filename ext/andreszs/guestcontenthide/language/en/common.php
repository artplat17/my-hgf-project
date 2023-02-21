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

	'ACP_GCH_TITLE'			=> 'Guest Content Hide',
	'ACP_GCH_DETAILS'		=> 'Here you can select what post content to hide from guests or bots.',
	'ACP_GCH_SETTINGS'		=> 'Settings',
	'ACP_GCH_SETTING_SAVED'	=> 'Settings have been saved successfully!',

	'ACP_GCH_GUESTS'		=> 'Guests',
	'ACP_GCH_BOTS'			=> 'Bots',
	'ACP_GCH_REFERENCE'		=> 'Reference',
	'ACP_GCH_ABOUT'			=> 'About',

	'ACP_GCH_POST_IMG'		=> 'Post with images',
	'ACP_GCH_POST_URL'		=> 'Post with links',
	'ACP_GCH_ATTACHMENTS'	=> 'Attachments in posts',
	'ACP_GCH_SIGNATURES'	=> 'User signatures in posts',
	'ACP_GCH_VISIBLE'		=> 'Visible',
	'ACP_GCH_HIDDEN'		=> 'Hidden',
	'ACP_GCH_HIDE_IMG'		=> 'Hide images',
	'ACP_GCH_HIDE_URL'		=> 'Hide links',
	'ACP_GCH_HIDE_POST'		=> 'Hide post content',

	'ACP_GCH_INFO_IMG'		=> 'The <i>Hide images</i> option will replace post images with this message',
	'ACP_GCH_INFO_URL'		=> 'The <i>Hide links</i> option will replace post links with this message',
	'ACP_GCH_INFO_POST'		=> 'The <i>Hide post content</i> option will replace the entire post with this message',

	'ACP_GCH_DISCUSS'		=> 'To check for latest version, suggest improvements or report bugs, please visit the GCH extension on phpBB.',
	'ACP_GCH_GITHUB'		=> 'You can improve this extension by creating a PR (Pull Request) on GitHub directly.',

	'GCH_HIDDEN_URL'		=> '[Please login or register to view this link]',
	'GCH_HIDDEN_IMG'		=> '',
	'GCH_HIDDEN_POST'		=> '<strong>This post contains images and is visible to registered users only. </strong>',

));
