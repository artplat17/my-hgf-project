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
 * Guest Content Hide ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('andreszs/guestcontenthide', 'common');
		$this->tpl_name = 'acp_gch_body';
		$this->page_title = $user->lang('ACP_GCH_TITLE');
		add_form_key('andreszs/gch');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('andreszs/gch'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$config->set('gch_g_hide_img', $request->variable('gch_g_hide_img', 0));
			$config->set('gch_g_hide_url', $request->variable('gch_g_hide_url', 0));
			$config->set('gch_g_hide_att', $request->variable('gch_g_hide_att', 0));
			$config->set('gch_g_hide_sig', $request->variable('gch_g_hide_sig', 0));
			$config->set('gch_b_hide_img', $request->variable('gch_b_hide_img', 0));
			$config->set('gch_b_hide_url', $request->variable('gch_b_hide_url', 0));
			$config->set('gch_b_hide_att', $request->variable('gch_b_hide_att', 0));
			$config->set('gch_b_hide_sig', $request->variable('gch_b_hide_sig', 0));

			trigger_error($user->lang('ACP_GCH_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action,
			'GCH_G_HIDE_IMG'	=> $config['gch_g_hide_img'],
			'GCH_G_HIDE_URL'	=> $config['gch_g_hide_url'],
			'GCH_G_HIDE_ATT'	=> $config['gch_g_hide_att'],
			'GCH_G_HIDE_SIG'	=> $config['gch_g_hide_sig'],
			'GCH_B_HIDE_IMG'	=> $config['gch_b_hide_img'],
			'GCH_B_HIDE_URL'	=> $config['gch_b_hide_url'],
			'GCH_B_HIDE_ATT'	=> $config['gch_b_hide_att'],
			'GCH_B_HIDE_SIG'	=> $config['gch_b_hide_sig'],
		));
	}
}
