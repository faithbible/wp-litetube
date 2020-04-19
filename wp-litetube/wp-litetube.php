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


function LiteYouTube( $atts ) {
    $lt = shortcode_atts(array(
       'id' => 'MFHVBUNGXzI',
       'img' => 'https://placeimg.com/1024/576/nature'
    	), $atts);
    return '<lite-youtube videoid="' . $a['id'] . '" style="background-image: url(' . $a['img'] . ');"><div class="lty-playbtn"></div></lite-youtube>';
    }
add_shortcode('litetube', 'LiteYouTube');

  ?>
