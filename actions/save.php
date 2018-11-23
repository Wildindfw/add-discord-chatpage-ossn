<?php
/**
 * WildIn
 *
 * @package    	WiLDin for Ossn
 * @author     	Geocadin RA <admin@wild-in.com>
 * @author_url 	http://www.WiLD-in.com/
 * @copyright  	2018 WiLd-in.com
 * @license     General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link        http://www.opensource-socialnetwork.org/licence
*/
$input = input('discordchat');
$component = new OssnComponents;

$vars = array(
			 'free_html' => $input
		 );
if($component->setSettings('discordchat', $vars)){
	ossn_trigger_message(ossn_print('discordchat:saved'));
	redirect(REF);
} else {
	ossn_trigger_message(ossn_print('discordchat:save:error'), 'error');
	redirect(REF);
}
