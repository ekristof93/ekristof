<?php

  function getMyBanner($cls, $src) { ?>
     <picture>
         <source srcset="<?php echo str_replace(".jpg", "-1693x604.jpg", $src ); ?> 1693w, <?php echo str_replace(".jpg", "-3386x1208.jpg", $src ); ?> 3386w" media="(min-width: 1010px)">
         <source srcset="<?php echo str_replace(".jpg", "-1161x604.jpg", $src ); ?> 1161w, <?php echo str_replace(".jpg", "-2322x1208.jpg", $src ); ?> 2322w" media="(min-width: 800px)">
         <source srcset="<?php echo str_replace(".jpg", "-485x302.jpg", $src ); ?> 485w, <?php echo str_replace(".jpg", "-970x604.jpg", $src ); ?> 970w" media="(min-width: 530px)">
         <?php
           echo get_header_image_tag(array(
             'class' => $cls,
             'src' => $src,
             'srcset' => str_replace(".jpg", "-302x302.jpg", $src) . ' 302w, ' . str_replace(".jpg", "-604x604.jpg", $src) . ' 604w'
           ));
         ?>
     </picture>
  <?php }

  function ekristof_resources() {
    wp_enqueue_style('styles', get_stylesheet_uri());
    wp_enqueue_script('App', get_theme_file_uri('/assets/scripts/App-bundled.js'), NULL, '1.0', true);
    wp_enqueue_script('Vendor', get_theme_file_uri('/assets/scripts/Vendor-bundled.js'), NULL, '1.0', false);
  }

  add_action('wp_enqueue_scripts', 'ekristof_resources');

  function ekristof_setup() {

    // Fordítás
    //load_theme_textdomain( 'ekristof', get_template_directory() . '/languages' );

    // Menük regisztrálása
    register_nav_menus(array(
      'header-menu' => __('Header Menü'),
      'social-links' => __('Közösségi linkek')
    ));

    // Kiemelt képek és cropping ratio-k
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 496, 177, true);
    add_image_size('bigger-thumbnail', 992, 354, true);

    add_image_size('header-image-large--hi-dpi', 3386, 1208, true);
    add_image_size('header-image-large', 1693, 604, true);
    add_image_size('header-image-medium--hi-dpi', 2322, 1208, true);
    add_image_size('header-image-medium', 1161, 604, true);
    add_image_size('header-image-small--hi-dpi', 970, 604, true);
    add_image_size('header-image-small', 485, 302, true);
    add_image_size('header-image-smaller--hi-dpi', 604, 604, true);
    add_image_size('header-image-smaller', 302, 302, true);

    // Poszt formátumok
    //add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }

  add_action('after_setup_theme', 'ekristof_setup');


  function custom_excerpt_length() {
    return 20;
  }

  add_filter('excerpt_length', 'custom_excerpt_length');


  // Widgetek
  require get_theme_file_path( '/inc/widgets.php' );

  // wp_customize testreszabható blokkok a front-page-en
  require get_theme_file_path( '/inc/customizable-blocks.php' );

  // Fejrész kép
  require get_theme_file_path( '/inc/custom-header.php' );

  // Az oldal szín palettái
  require get_theme_file_path( '/inc/color-patterns.php' );

  // Közösségi menü ikonjainak megjelenítése
  require get_theme_file_path( '/inc/icon-functions.php' );

?>
