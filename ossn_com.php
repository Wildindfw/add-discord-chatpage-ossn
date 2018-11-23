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

define('__altm__', ossn_route()->com . 'Discordchat/');

function Discordchat_init() {  

    ossn_register_page('Discordchat', 'Discordchat');
    if(ossn_isLoggedin()) {
        $icon = ossn_site_url('components/Discordchat/images/icon.png');
        ossn_register_sections_menu('newsfeed', array('text' => Discord(' "https://titanembeds.com/embed/459837648618389525?defaultchannel=461786959627419648&fixedsidenav=true&sametarget=true&theme=MetroEdge"'), 'url' => ossn_site_url('severload'), 'icon' => $icon, 'section' => 'links'));
	}
}
	
//initilize serverload component
ossn_register_callback('ossn', 'init', 'Discordchat_init');
