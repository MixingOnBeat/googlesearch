<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\controller;

class main
{


   /* @var \phpbb\template\template */
   protected $template;

   /* @var \phpbb\user */
   protected $user;

   /* @var \phpbb\controller\helper */
   protected $helper;
 
   /** @var \phpbb\request\request */
   protected $request;

   public function __construct(\phpbb\template\template $template,  \phpbb\user $user, \phpbb\controller\helper $helper, \phpbb\request\request $request)
   {

   $this->template = $template;
	$this->user = $user;
	$this->helper = $helper;
	$this->request = $request;
   }

   public function base()
   {

      $s_action = $this->helper->route('hifikabin_googlesearch_controller');

		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME' 	=> ($this->user->lang['GOOGLE']),
		));

      return $this->helper->render('googlesearch.html', $this->user->lang['GOOGLE']);
   }
}
