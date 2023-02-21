<?php

/**
*
* @package phpBB3Fixes
* @copyright (c) 2020 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*
*/

namespace ppk\phpbb3fixes\migrations;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

class phpbb3fixes_manage extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['phpbb3fixes_version']);
	}

	public function update_data()
	{
		return array(

			// Add new config vars

			array('config.add', array('phpbb3fixes_version', '1.2.0')),

		);
	}

	public function revert_data()
	{
		return array(

			array('config.remove', array('phpbb3fixes_version')),

		);
	}
}