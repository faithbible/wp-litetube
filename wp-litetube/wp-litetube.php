<?php
/*
   Plugin Name: WP LiteTube
   Plugin URI: http://wordpress.org/extend/plugins/wp-litetube/
   Version: 0.1
   Author: JP@FBC
   Description: a wordpress plugin
   Text Domain: wp-litetube
   License: GPLv3
  */

# add to stylesheet, add script, use element with shortcode


function LiteYouTube($type) {
    extract(shortcode_atts(array(
        'link' => 'link'
    	), $link));
    return '<a href="' . esc_attr($link) . '">YouTube Link</a>';
    }
add_shortcode('litetube', 'LiteYouTube');

  ?>