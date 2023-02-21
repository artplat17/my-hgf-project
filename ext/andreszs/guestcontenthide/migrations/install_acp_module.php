<?php
/**
 *
 * Guest Content Hide. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Andres, https://www.andreszsogon.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace andreszs\guestcontenthide\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['gch_g_hide_img']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			// Add config entries
			array('config.add', array('gch_g_hide_img', 0)),
			array('config.add', array('gch_g_hide_url', 0)),
			array('config.add', array('gch_g_hide_att', 0)),
			array('config.add', array('gch_g_hide_sig', 0)),
			array('config.add', array('gch_b_hide_img', 0)),
			array('config.add', array('gch_b_hide_url', 0)),
			array('config.add', array('gch_b_hide_att', 0)),
			array('config.add', array('gch_b_hide_sig', 0)),
			
			// Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'GUESTCONTENTHIDE_TITLE'
			)),
			
			array('module.add', array(
				'acp',
				'GUESTCONTENTHIDE_TITLE',
				array(
					'module_basename'	=> '\andreszs\guestcontenthide\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
