<?php

/**
*
* @package phpBB3Fixes
* @copyright (c) 2020 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*
*/

namespace ppk\phpbb3fixes\event;

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var string phpbb_root_path */
	protected $phpbb_root_path;

	/** @var string phpEx */
	protected $phpEx;

	public $phpbb3fixes;

	public function __construct(\phpbb\template\template $template, $phpbb_root_path, $phpEx)
	{
		$this->template = $template;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $phpEx;

		/*
		display_topic_views - отображать количество просмотров на странице темы
		fix_site_logo - установить свой логотип для форума
		fix_u_canonical - добавить идентификатор форума в канонический url
		fix_u_index - убрать index.php из ссылки на главную страницу
		 */
		$this->phpbb3fixes=array(
			'display_topic_views' => false,
			'fix_site_logo' => '',
			'fix_u_canonical' => true,
			'fix_u_index' => true,
		);
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after'           => 'fix_u_index',
			'core.user_setup'							=> 'fix_site_logo',
			'core.viewtopic_get_post_data'           => 'fix_u_canonical',
			'core.viewtopic_modify_post_data' => 'display_topic_views',
		);
	}

	public function display_topic_views($event)
	{
		if(!$this->phpbb3fixes['display_topic_views'])
		{
			return false;
		}

		$topic_data=$event['topic_data'];

		$this->template->assign_vars(array(
			'TOPIC_VIEWS' => $topic_data['topic_views'],
			)
		);
	}

	public function fix_u_index()
	{
		if(!$this->phpbb3fixes['fix_u_index'])
		{
			return false;
		}

		$this->template->assign_vars(array(
			'U_INDEX' => append_sid($this->phpbb_root_path),
			)
		);
	}

	public function fix_u_canonical($event)
	{
		if(!$this->phpbb3fixes['fix_u_canonical'])
		{
			return false;
		}

		$forum_id=$event['forum_id'];
		$topic_id=$event['topic_id'];
		$start=$event['start'];

		$this->template->assign_vars(array(
			'U_CANONICAL' => generate_board_url() . '/' . append_sid("viewtopic.{$this->php_ext}", "f=$forum_id&amp;t=$topic_id" . (($start) ? "&amp;start=$start" : ''), true, ''),
			)
		);
	}

	public function fix_site_logo($event)
	{
		if(!$this->phpbb3fixes['fix_site_logo'])
		{
			return false;
		}

		$this->template->assign_vars(array(
			'PHPHBB3FIXES_SITE_LOGO' => $this->phpbb3fixes['fix_site_logo'],
			)
		);
	}
}
