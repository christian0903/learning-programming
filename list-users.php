<?php
/*
Plugin Name: list users
Plugin URI:  http://link to your plugin homepage
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      Christian Vanhenten
Author URI:  http://link to your website
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/

/**********************************
* install admin setup pages and menus
**********************************/
//require_once( dirname( __FILE__ ) . '/includes/list-users-setup.php' );

function fonction_shortcode_grand_titre($param, $content) {
	return '<h1>' . $content . '</h1>';
}
add_shortcode('grand_titre', 'fonction_shortcode_grand_titre');

?>
