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
  function snowflakes_script(){
    $rand = rand(1,12);
    $i = 0; 
    do {
    echo '<div class="snow_img hastop" style="position:absolute;top:0px; left:'.rand(1,1920).'px; z-index:999!important; width:50px; height:50px;"><img src="http://pngimg.com/uploads/snowflakes/snowflakes_PNG7593.png"/></div>';
    $i = $i+1; 
    }  while ($rand >= $i);
    wp_enqueue_script('snowflake', plugins_url('js\snowflake.js',__FILE__), array('jquery'), true);

  }

  add_action('wp_enqueue_scripts', 'snowflakes_script');