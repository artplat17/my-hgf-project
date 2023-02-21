<?php
/**
*
* @package phpBB Extension - DisplayContactIcon
* @copyright (c) 2016 Sumanai
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace Sumanai\DisplayContactIcon\migrations;

class DisplayContactIcon_1_0_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['display_contact_icon_version']) && version_compare($this->config['display_contact_icon_version'], '1.0.2', '>=');
	}

	static public function depends_on()
	{
		return array('\Sumanai\DisplayContactIcon\migrations\DisplayContactIcon_1_0_1');
	}

	public function update_data()
	{
		return array(
			// Current version
			array('config.update', array('display_contact_icon_version', '1.0.2')),
		);
	}
}
