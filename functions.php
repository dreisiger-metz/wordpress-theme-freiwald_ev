<?php
  // Register Nav Walker class_alias
  require_once('class-wp-bootstrap-navwalker.php');

  // Theme support
  function fw_theme_setup() {
    add_theme_support('post-thumbnails');

    // add support for nav menus
    register_nav_menus(array('primary' => __('Primary Menu')));
    register_nav_menus(array('footer' => __('Footer Menu')));
    register_nav_menus(array('language_chooser' => __('Language Chooser')));
  }

  add_action('after_setup_theme', 'fw_theme_setup');

  // Excerpt length control
  function set_excerpt_length() {
    return 100;
  }

  add_filter('excerpt_length', 'set_excerpt_length');


  // Widget locations
  function fw_init_widgets($id) {
    register_sidebar(array(
      'name'          => 'Jumbotron Button 1',
      'id'            => 'jumbotron_button_1',
      'before_widget' => '<div class="col-6">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name'          => 'Jumbotron Button 2',
      'id'            => 'jumbotron_button_2',
      'before_widget' => '<div class="col-6">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name'          => 'Jumbotron Button 3',
      'id'            => 'jumbotron_button_3',
      'before_widget' => '<div class="col-6">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name'          => 'Jumbotron Button 4',
      'id'            => 'jumbotron_button_4',
      'before_widget' => '<div class="col-6">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name'          => 'Frontpage Other',
      'id'            => 'frontpage_other',
      'before_widget' => '<div class="container">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'fw_init_widgets');


  // Include customizer file
  require get_template_directory(). '/inc/customizer.php';
?>
