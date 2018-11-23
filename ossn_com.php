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
));
define('__altm__', ossn_route()->com . 'Discordchat/');

function Discordchat_init() {  
ossn_register_sections_menu("newsfeed", array(
        "text" => "DiscordChat",
        "url" => "https://titanembeds.com/embed/459837648618389525?defaultchannel=461786959627419648&fixedsidenav=true&sametarget=true&theme=MetroEdge",
        "section" => "ChatRoom",
        "icon" => true,
));
ossn_register_sections_menu("newsfeed", array(
        "text" => "How to Verify",
        "url" => "https://sites.google.com/s/1hxljiVWhT-4RAJ1v6Kd7QsG88kqEwlyy/p/112sih1USnuvfMj8U3gFh-2pukijWMtzR/edit",
        "section" => "Chatroom",
        "icon" => true,

ossn_register_callback('ossn', 'init', 'Discordchat_init');
