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

# add conditional check for css before calling script in footer

function test_if_it_exists() {
$handle = 'fluidVids.js';
    $list = 'enqueued';
      if ( wp_script_is( $handle, $list ) ) {
        return;
      } else {
        wp_register_script( 'fluidVids.js', plugin_dir_url(__FILE__).'js/fluidvids.min.js');
        wp_enqueue_script( 'fluidVids.js' );
      }
}

function LTscript(){
  ?>
  <script src="' .  plugin_dir_url( __FILE__ ) . 'lite-youtube/src/lite-yt-embed.js"></script>
  <?php
}
# add_action( 'wp_footer', 'LTscript' );
		
# shortcode usage = [liteube id="youtube video id" img="url of video preview"]

function LiteYouTube( $atts ) {
    $lt = shortcode_atts(array(
       'id' => 'MFHVBUNGXzI',
       'img' => 'https://placeimg.com/1024/576/nature'
    	), $atts);
   return '<script src="' .  plugin_dir_url( __FILE__ ) . 'lite-youtube/src/lite-yt-embed.js"></script> \r\n <link rel="stylesheet" href="' .  plugin_dir_url( __FILE__ ) . 'lite-youtube/src/lite-yt-embed.css" /> \r\n <lite-youtube videoid="' . $a['id'] . '" style="background-image: url(' . $a['img'] . ');"><div class="lty-playbtn"></div></lite-youtube>';
    }
add_shortcode('litetube', 'LiteYouTube');

  ?>
