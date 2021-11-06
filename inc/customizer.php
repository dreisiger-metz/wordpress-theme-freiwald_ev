<?php
function fw_customize_register($wp_customize) {
  // Jumbotron section
  $wp_customize->add_section('frontpage_showcase', array(
    'title'       => __('Frontpage Showcase', 'freiwald_wp'),
    'description' => sprintf(__('Options for the frontpage\'s showcase', 'freiwald_wp')),
    'priority'    => 130
  ));

  $wp_customize->add_setting('frontpage_moreinfo_text', array(
    'default'     => _x('Über uns', 'freiwald_wp'),
    'type'        => 'theme_mod'
  ));
  $wp_customize->add_control('frontpage_moreinfo_text', array(
    'label'       => __('More Info text', 'freiwald_wp'),
    'section'     => 'frontpage_showcase',
    'priority'    => 1
  ));

  $wp_customize->add_setting('frontpage_moreinfo_link', array(
    'default'     => _x('/ueber-uns', 'freiwald_wp'),
    'type'        => 'theme_mod'
  ));
  $wp_customize->add_control('frontpage_moreinfo_link', array(
    'label'       => __('More Info link', 'freiwald_wp'),
    'section'     => 'frontpage_showcase',
    'priority'    => 2
  ));
}

add_action('customize_register', 'fw_customize_register');
?>
