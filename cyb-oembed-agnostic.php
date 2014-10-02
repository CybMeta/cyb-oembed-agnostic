<?php
/*
Plugin Name:  Cyb oEmbed Agnostic
Plugin URI:   http://cybmeta.com
Description:  This plugin make oEmbed content protocol agnostic.
Version:      0.1
Author:       Juan Padial (@CybMeta)
Author URI:   http://cybmeta.com
*/

//Filter oembed to make them protocol agnostic
add_filter('embed_oembed_html', 'cyb_oembed_agnostic', 99);
function cyb_oembed_agnostic($html) {
	return preg_replace( '@src="https?:@', 'src="', $html );
}

?>