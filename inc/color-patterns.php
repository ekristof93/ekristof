<?php

/*
function ekristof_hex2rgb( $color ) {
  $color = trim( $color, '#' );
  if ( strlen( $color ) === 3 ) {
    $r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
    $g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
    $b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
  } else if ( strlen( $color ) === 6 ) {
    $r = hexdec( substr( $color, 0, 2 ) );
    $g = hexdec( substr( $color, 2, 2 ) );
    $b = hexdec( substr( $color, 4, 2 ) );
  } else {
    return array();
  }
  return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}
*/

function ekristof_color_pickers($wp_customize) {  
  /*$wp_customize->add_setting('ekristof_dark_base_color', array(
    'default'     => '#6E0025',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ekristof_dark_base_color_control', array(
    'label'       => __('Alap szín (sötét)', 'eKristof WordPress'),
    'section'     => 'colors',
    'settings'    => 'ekristof_dark_base_color'
  )));

  $wp_customize->add_setting('ekristof_brand_color', array(
    'default'     => '#FF701A',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ekristof_brand_color_control', array(
    'label'       => __('Brand szín', 'eKristof WordPress'),
    'section'     => 'colors',
    'settings'    => 'ekristof_brand_color'
  )));

  $wp_customize->add_setting('ekristof_dark_base_color_hover', array(
    'default'     => '#b7003c',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ekristof_dark_base_color_hover_control', array(
    'label'       => __('Alap hover szín (sötét)', 'eKristof WordPress'),
    'section'     => 'colors',
    'settings'    => 'ekristof_dark_base_color_hover'
  )));

  $wp_customize->add_setting('ekristof_light_base_color', array(
    'default'     => '#FFF8DC',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ekristof_light_base_color_control', array(
    'label'       => __('Alap szín (világos)', 'eKristof WordPress'),
    'section'     => 'colors',
    'settings'    => 'ekristof_light_base_color'
  )));

  $wp_customize->add_setting('ekristof_light_base_color_hover', array(
    'default'     => '#FFF8DC',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ekristof_light_base_color_hover_control', array(
    'label'       => __('Alap hover szín (világos)', 'eKristof WordPress'),
    'section'     => 'colors',
    'settings'    => 'ekristof_light_base_color_hover'
  )));

  $wp_customize->add_setting('ekristof_alternative_light', array(
    'default'     => '#898686',
    'transport'   => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ekristof_alternative_light_control', array(
    'label'       => __('Alternatív világos szín', 'eKristof WordPress'),
    'section'     => 'colors',
    'settings'    => 'ekristof_alternative_light'
  ))); */
}

add_action('customize_register', 'ekristof_color_pickers');

/*
function ekristof_color_css() { ?>

  <style type="text/css">
    .btn {
      background-color: <?php echo get_theme_mod('ekristof_dark_base_color'); ?>;
      color: <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    .btn:hover {
      background-color: <?php echo get_theme_mod('ekristof_dark_base_color_hover'); ?>;
    }

    .btn--light {
      background-color: <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
      color: <?php echo get_theme_mod('ekristof_dark_base_color'); ?>;
    }

    .btn--light:hover {
      background-color: <?php echo get_theme_mod('ekristof_light_base_color_hover'); ?>;
    }

    .headline {
      color: <?php echo get_theme_mod('ekristof_dark_base_color'); ?>;
    }

    .headline--light {
      color: <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    .first-block__title, .first-block__subtitle, .first-block__description {
      color: <?php echo "#" . get_header_textcolor(); ?>;
    }

    .page-section--dark,
    .site-header__menu-icon {
      background-color: <?php echo get_theme_mod('ekristof_dark_base_color'); ?>;
    }

    .first-block {
      border-bottom: 5px solid <?php echo get_theme_mod('ekristof_dark_base_color'); ?>;
    }

    .site-header {
      background-color: rgba(<?php echo implode(', ', ekristof_hex2rgb( get_theme_mod('ekristof_dark_base_color') )); ?>, 1);
    }

    @media (min-width: 800px) {
      .site-header{
        background-color: rgba(<?php echo implode(', ', ekristof_hex2rgb( get_theme_mod('ekristof_dark_base_color') )); ?>, 0.8);
      }
    }

    .site-header__menu-icon:hover {
      background-color: <?php echo get_theme_mod('ekristof_dark_base_color_hover'); ?>;
    }

    .page-section--light,
    .site-header__menu-icon-item,
    .posts__item,
    .searchform__input,
    .page-section--light,
    .site-header__menu-icon-item,
    .posts__item,
    .searchform__input {
      background-color: <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    .page-section--dark,
    .primary-nav__home,
    .page-section--dark,
    .primary-nav__home {
      color: <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    a,
    .posts__item,
    .social-links .menu-item a {
      color: <?php echo get_theme_mod('ekristof_dark_base_color'); ?>;
    }

    .widget ul li {
      border-top: 1px solid <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    .widget ul li:last-child {
      border-bottom: 1px solid <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    .primary-nav__link-list .menu-item {
      border-top: 1px solid <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    @media (min-width: 800px) {
      .primary-nav__link-list .menu-item {
        border-top: none;
      }
    }

    .primary-nav__link-list .menu-item:last-child {
      border-bottom: 1px solid <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    @media (min-width: 800px){
      .primary-nav__link-list .menu-item:last-child {
        border-bottom: none;
      }
    }

    .widget ul li {
      border-top: 1px solid <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    .widget ul li:last-child {
      border-bottom: 1px solid <?php echo get_theme_mod('ekristof_light_base_color'); ?>;
    }

    .primary-nav__home-e,
    .primary-nav__link-list .menu-item a:hover {
      color: <?php echo get_theme_mod('ekristof_brand_color'); ?>;
    }

    @media (min-width: 800px) {
      .primary-nav__link-list .menu-item a.is-current-link {
        color: <?php echo get_theme_mod('ekristof_brand_color'); ?>;
      }
    }

    .headline--framed {
      background-color: <?php echo get_theme_mod('ekristof_alternative_light'); ?>;
    }
  </style>
  
  <?php }
  
  add_action('wp_head', 'ekristof_color_css');
  ?>
  */