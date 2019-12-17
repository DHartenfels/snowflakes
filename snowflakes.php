<?php
defined('ABSPATH') or die("nope");
/**
 * Plugin Name: WP_Snowflakes
 * Plugin URI: 
 * Description: Lets Snowflakes appear on your Website.
 * Version: 1.1
 * Author: Dennis Hartenfels
 * Author URI: 
 * License: 
 * License URI:  
 * Text Domain:  snowflakes-plugin
 */
// function snowflakes_script(){
//   echo '<div class="snow_img hastop" style="position:absolute;top:0px; left:200px; z-index:999!important; width:50px; height:50px;"><img src="http://pngimg.com/uploads/snowflakes/snowflakes_PNG7593.png"/></div>';  
//   wp_enqueue_script('snowflake', plugins_url('js\snowflake.js',__FILE__), array('jquery'), true);

// }

function snowflakes_style()
{
  echo '<div class="container"><div class="snowfall">';
  for ($i = 1; $i <= 120; $i++) {
    echo '<div class="snowflake">🖕</div>';
  }
  echo '</div></div>';
  wp_register_style('snowflake', plugins_url('css\snowflake.css', __FILE__), false, '1.0.0', 'all');
  wp_enqueue_style('snowflake');
}

// add_action('wp_enqueue_scripts', 'snowflakes_script');
add_action('wp_enqueue_scripts', 'snowflakes_style');
