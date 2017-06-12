<?php
  function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('agency', get_template_directory_uri() . '/css/agency.min.css');
    $dependencies = array('bootstrap', 'agency');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies);
  }

  function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.3.6', true);
    wp_enqueue_script('agency', get_template_directory_uri().'/js/agency.js', $dependencies, '3.3.6', true);
    wp_enqueue_script('easing', get_template_directory_uri().'/js/easing.js', $dependencies, '3.3.6', true);
    wp_enqueue_script('bootstrap_validation', get_template_directory_uri().'/js/jqBootstrapValidation.js', $dependencies, '3.3.6', true);
  }

  add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles');
  add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts');

  function bootstrapstarter_wp_setup() {
      add_theme_support( 'title-tag' );
  }

  add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
?>

