<?php
/**
 *
 * Guest Content Hide. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Andres, https://www.andreszsogon.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace andreszs\guestcontenthide\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Guest Content Hide Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/* @var \phpbb\language\language */
	protected $language;

	/* @array $img_regex */
	var $img_regex = array(
		'~<img[^>]*>.*?</img>~i',
		'~\[img[^>]*?\].*?\[/img[^>]*?\]~i'
	);

	/* @array $url_regex */
	var $url_regex = array(
		'~<a[^>]*>.*?</a>~i',
		'~<url[^>]*>.*?</url>~i',
		'~\[url[^>]*?\].*?\[/url[^>]*?\]~i'
	);

	/**
	* Constructor
	*
	* @param \phpbb\config\config	$config
	* @param \phpbb\user			$user
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\user $user, \phpbb\language\language $language)
	{
		$this->config = $config;
		$this->user = $user;
		$this->language = $language;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'load_language_on_setup',
			'core.viewtopic_post_rowset_data' => 'viewtopic_post_rowset_data',
			'core.viewtopic_modify_post_data' => 'viewtopic_modify_post_data'
		);
	}

	/**
	 * Load language files
	 *
	 * @param \phpbb\event\data $event
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'andreszs/guestcontenthide',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * viewtopic_post_rowset_data event handler
	 * Hide links, images and signature from post to guests
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function viewtopic_post_rowset_data($event)
	{

		$row = $event['rowset_data'];

		//echo '<h2>row:</h2>';
		//echo '<pre>'.$row['post_text'].'</pre>';

		if($this->user->data['is_bot']){
			/* Handling for bots */

			if($this->config['gch_b_hide_img'] == 1){
				// Hide images
				foreach($this->img_regex as $regex){
					$row['post_text'] = preg_replace($regex, $this->language->lang('GCH_HIDDEN_IMG'), $row['post_text']);
				}
			}else if($this->config['gch_b_hide_img'] == 2){
				// Hide post content if image present
				foreach($this->img_regex as $regex){
					if(preg_match($regex, $row['post_text']) > 0){
						$row['post_text'] = $this->language->lang('GCH_HIDDEN_POST');
					}
				}
			}

			if($this->config['gch_b_hide_url'] == 1){
				// Hide links
				foreach($this->url_regex as $regex){
					$row['post_text'] = preg_replace($regex, $this->language->lang('GCH_HIDDEN_URL'), $row['post_text']);
				}
			}else if($this->config['gch_b_hide_url'] == 2){
				// Hide post content if link present
				foreach($this->url_regex as $regex){
					if(preg_match($regex, $row['post_text']) > 0){
						$row['post_text'] = $this->language->lang('GCH_HIDDEN_POST');
					}
				}
			}

			if($this->config['gch_b_hide_sig'] == 1){
				// Hide user signature
				$row['enable_sig'] = 0;
			}

		}else if(!$this->user->data['is_registered']){
			/* Handling for guests */

			if($this->config['gch_g_hide_img'] == 1){
				// Hide images
				foreach($this->img_regex as $regex){
					$row['post_text'] = preg_replace($regex, $this->language->lang('GCH_HIDDEN_IMG'), $row['post_text']);
				}
			}else if($this->config['gch_g_hide_img'] == 2){
				// Hide post content if image present
				foreach($this->img_regex as $regex){
					if(preg_match($regex, $row['post_text']) > 0){
						$row['post_text'] =  '<label class="hidcont" for="username">'.$this->language->lang('GCH_HIDDEN_POST').'</label>';
					}
				}
			}

			if($this->config['gch_g_hide_url'] == 1){
				// Hide links
				foreach($this->url_regex as $regex){
					$row['post_text'] = preg_replace($regex, $this->language->lang('GCH_HIDDEN_URL'), $row['post_text']);
				}
			}else if($this->config['gch_g_hide_url'] == 2){
				// Hide post content if link present
				foreach($this->url_regex as $regex){
					if(preg_match($regex, $row['post_text']) > 0){
						$row['post_text'] = $this->language->lang('GCH_HIDDEN_POST');
					}
				}
			}

			if($this->config['gch_g_hide_sig'] == 1){
				// Hide user signature
				$row['enable_sig'] = 0;
			}

		}

		$event['rowset_data'] = $row;

	}

	/**
	 * viewtopic_modify_post_data event handler
	 * Hide attachments from post to guests
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function viewtopic_modify_post_data($event)
	{

		if($this->user->data['is_bot']){
			/* Handling for bots */

			if($this->config['gch_b_hide_att'] == 1){
				// Hide attachments
				$event['attachments'] = array();
				$event['display_notice'] = 1;
			}

		}else if(!$this->user->data['is_registered']){
			/* Handling for guests */

			if($this->config['gch_g_hide_att'] == 1){
				// Hide attachments
				$event['attachments'] = array();
				$event['display_notice'] = 1;
			}

		}

	}

}
