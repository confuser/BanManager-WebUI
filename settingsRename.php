<?php
/**
* This is the general configuaration file for Ban Management.
* In here you can control your encoding for server transfers,
* define what tables you want enabled, set your password for ACP,
* and more.
**/

date_default_timezone_set("Europe/Berlin"); // Set default timezone for date()

$settings['debug']['sqlcache'] = false; // show and var_dump any cached SQL queries
$settings['debug']['error_reporting'] = false; // display PHP errors
$settings['debug']['error_reporting_level'] = E_ALL; // Set error level (E_ALL, E_ERROR, E_WARNING, E_NOTICE)

$settings['utf8'] = true; // Encoding (Recommended TRUE)
$settings['latest_bans'] = true;  // Latest Bans table
$settings['latest_mutes'] = true; // Latest Mutes table
$settings['latest_warnings'] = true; // Latest warnings table
$settings['servers'] = '';
$settings['password'] = 'password'; // ACP Password (Keep it strong)
$settings['footer'] = '&copy; Your Server '.date('Y'); // Footer for all pages
$settings['admin_link'] = true; // Show the admin link in the footer of all page
$settings['bm_info'] = true; // Show ban management infomation aside 'Account Status'
$settings['bm_info_icon'] = true; // Show the 'info' icon next to the title of bm_info
$settings['pastbans'] = true; // Show amount of players banned under the search

$settings['player_current_ban'] = true;
$settings['player_current_mute'] = true;
$settings['player_previous_bans'] = true;
$settings['player_previous_mutes'] = true;
$settings['player_kicks'] = true;
$settings['player_warnings'] = true;
$settings['player_current_ban_extra_html'] = '';
$settings['player_current_mute_extra_html'] = '';

$settings['widget_bans_count'] = 5;
$settings['widget_mutes_count'] = 5;
$settings['widget_warnings_count'] = 5;

// Caching options per action, in seconds
$settings['cache_viewplayer'] = 600;
$settings['cache_viewip'] = 600;
$settings['cache_statistics'] = 3600;
$settings['cache_search'] = 600;
$settings['cache_home'] = 60;

/**
* These are the language options for Ban Management
**/

$language['brand'] = 'Ban Management'; // The branding of all pages
$language['header-title'] = 'Account Status'; // Edit the 'Account Status' text above the search
$language['description'] = ''; // Meta Description for search engines
$language['title'] = 'Ban Management by Frostcast'; // Title of all pages
$language['latest_bans_title'] = 'Recent Bans'; // The text displayed over the latest bans table
$language['latest_mutes_title'] = 'Recent Mutes'; // The text displayed over the latest mutes table
$language['latest_warnings_title'] = 'Recent Warnings'; // The text displayed over the latest warnings table
$language['nav-home'] = 'Home'; // The text displayed in the navbar for 'Home'
$language['nav-stats'] = 'Statistics'; // The text displayed in the navbar for 'Servers'
$language['past_player_bans'] = 'Past Player Bans'; // The text displayed on the homepage
$language['bm_info_text'] = // The text displayed if bm_info is set to true. Enter your text below, HTML elements supported
'
  Ban Management is powerful ban and mute application that allows players to check if and why they were banned or muted and who
  it was by. You can also see how much time is left of your ban or mute.

';

/**
* These are the settings for editing the layout of Ban Management
**/

$theme['navbar-dark'] = false; // Enable dark theme for the navbar

/**
* Don't change the variables below!
**/

$settings['version'] = "1.1"

?>
