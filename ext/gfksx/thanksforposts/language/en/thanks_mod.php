<?php
/**
*
* Thanks For Posts extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLEAR_LIST_THANKS'			=> 'Clear Hot Rates List',
	'CLEAR_LIST_THANKS_CONFIRM'	=> 'Do you really want to clear the user`s Hot Rates List?',
	'CLEAR_LIST_THANKS_GIVE'	=> 'List of hot rates issued by the user was cleared.',
	'CLEAR_LIST_THANKS_POST'	=> 'List of hot rates in the message was cleared.',
	'CLEAR_LIST_THANKS_RECEIVE'	=> 'List of hot rates obtained by the user was cleared.',

	'DISABLE_REMOVE_THANKS'		=> 'Deleting hot rate has been disabled by the administrator',

	'GIVEN'						=> 'Hot Gifter',
	'GLOBAL_INCORRECT_THANKS'	=> 'You cannot give hot rate for a Global Announcement that has no reference to a particular forum.',
	'GRATITUDES'				=> 'Hot Rates List',

	'INCORRECT_THANKS'			=> 'Invalid hot rate',

	'JUMP_TO_FORUM'				=> 'Jump to forum',
	'JUMP_TO_TOPIC'				=> 'Jump to topic',

	'FOR_MESSAGE'				=> ' for post',
	'FURTHER_THANKS'     	    => array(
		1 => ' and one more user',
		2 => ' and %d more users',
	),

	'NO_VIEW_USERS_THANKS'		=> 'You are not authorised to view the Hot Rates List.',

	'NOTIFICATION_THANKS_GIVE'	=> array(
		1 => '%1$s <strong>rated</strong> your post <strong>as hot</strong>:',
		2 => '%1$s <strong>rated</strong> your post <strong>as hot</strong>:',
	),
	'NOTIFICATION_THANKS_REMOVE'=> array(
		1 => '<strong>Removed hot rate</strong> from %1$s for the post:',
		2 => '<strong>Removed hot rates</strong> from %1$s for the post:',
	),
	'NOTIFICATION_TYPE_THANKS_GIVE'		=> 'Someone rates your post as hot',
	'NOTIFICATION_TYPE_THANKS_REMOVE'	=> 'Someone removed hot rate from your post',

	'RECEIVED'					=> 'Hot Score',
	'REMOVE_THANKS'				=> 'Remove your hot rate: ',
	'REMOVE_THANKS_CONFIRM'		=> 'Are you sure you want to remove your hot rate?',
	'REMOVE_THANKS_SHORT'		=> 'Remove hot rate',
	'REPUT'						=> 'Hot Rating',
	'REPUT_TOPLIST'				=> '&#128293; Hot Rating Top-%d &#128293;',
	'RATING_LOGIN_EXPLAIN'		=> 'You are not authorised to view the toplist.',
	'RATING_NO_VIEW_TOPLIST'	=> 'You are not authorised to view the toplist.',
	'RATING_VIEW_TOPLIST_NO'	=> 'Toplist is empty or disabled by administrator',
	'RATING_FORUM'				=> 'Forum',
	'RATING_POST'				=> 'Post',
	'RATING_TOP_FORUM'			=> 'Hot Rating forums',
	'RATING_TOP_POST'			=> 'Hot Rating posts',
	'RATING_TOP_TOPIC'			=> 'Hot Rating topics',
	'RATING_TOPIC'				=> 'Topic',

	'THANK'						=> 'time',
	'THANK_FROM'				=> 'from',
	'THANK_TEXT_1'				=> 'These users rated as hot the author ',
	'THANK_TEXT_2'				=> ' for the post: ',
	'THANK_TEXT_2PL'			=> ' for the post (total %d):',
	'THANK_POST'				=> 'Rate the post of the author as hot: ',
	'THANK_POST_SHORT'			=> 'Hot!',
	'THANKS'					=> array(
		1	=> '%d &#128293;',
		2	=> '%d &#128293;',
	),
	'THANKS_BACK'				=> 'Return',
	'THANKS_INFO_GIVE'			=> '&#128293; You have just rated the post as hot! &#128293;',
	'THANKS_INFO_REMOVE'		=> '&#128148; You have just removed your hot rate &#128148;',
	'THANKS_LIST'				=> 'View/Close Hot Rates List',
	'THANKS_PM_MES_GIVE'		=> 'has rated your post as hot',
	'THANKS_PM_MES_REMOVE'		=> 'has removed hot rate for the post',
	'THANKS_PM_SUBJECT_GIVE'	=> 'Your post is HOT! <3',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'I don`t find your post hot anymore :(',
	'THANKS_USER'				=> '&#128293; Hot Rating Top-50 &#128293;',
	'TOPLIST'					=> 'Hot Posts Toplist',
));
