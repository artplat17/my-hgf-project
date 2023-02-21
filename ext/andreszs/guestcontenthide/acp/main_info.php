<?php
/**
 *
 * Guest Content Hide. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Andres, https://www.andreszsogon.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace andreszs\guestcontenthide\acp;

/**
 * Guest Content Hide ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\andreszs\guestcontenthide\acp\main_module',
			'title'		=> 'GUESTCONTENTHIDE_TITLE',
			'modes'		=> array(
				'settings' => array(
					'title'	=> 'GUESTCONTENTHIDE_CONFIG',
					'auth'	=> 'ext_andreszs/guestcontenthide && acl_a_board',
					'cat'	=> array('GUESTCONTENTHIDE_TITLE')
				),
			),
		);
	}
}
