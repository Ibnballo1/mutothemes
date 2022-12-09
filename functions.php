<?php

  function mutto_theme_support(){
    // Add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'mutto_theme_support');

  function mutto_theme_menus(){
    $locations = array(
      'primary' => "Primary Menu",
      'footer' => "Footer menus"
    );
    register_nav_menus($locations);
  }
  add_action('init', 'mutto_theme_menus');


  function mutto_styles(){
    wp_enqueue_style("muttothem-style-1", get_template_directory_uri() . "/assets/css/customstyles.css", array(), '1.0', 'all');
    wp_enqueue_style("muttothem-style-2", get_template_directory_uri() . "/assets/css/2.b9753982.chunk.css", array(), '1.0', 'all');
    wp_enqueue_style("muttothem-style-3", get_template_directory_uri() . "/assets/css/main.0dda1e04.chunk.css", array(), '1.0', 'all');
    wp_enqueue_style("muttothem-style-fontawesome", "https://use.fontawesome.com/releases/v5.7.1/css/all.css", array(), '5.7.1', 'all');
  }
  add_action('wp_enqueue_scripts', 'mutto_styles');

  function mutto_theme_scripts(){
    wp_enqueue_script('muttotheme-script-1', get_template_directory_uri() . "/assets/js/2.cddccd5a.chunk.js", array(), '1.0', true);
    wp_enqueue_script('muttotheme-script-2', get_template_directory_uri() . "/assets/js/main.a6fa955a.chunk.js", array(), '1.0', true);
    wp_enqueue_script('muttotheme-script-3', "https://buttons.github.io/buttons.js", array(), '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'mutto_theme_scripts');
?>