<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?></title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121423467-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121423467-1');
    </script>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header <?php if(is_admin_bar_showing()) { echo "site-header--admin-logged-in"; } ?>">
      <div class="wrapper">
        <div class="navi-toggle">
          <input type="checkbox" class="navi-toggle__checkbox" id="navi-toggle">

          <label for="navi-toggle" class="navi-toggle__button <?php if(is_admin_bar_showing()) { echo "navi-toggle__button--admin-logged-in"; } ?>">
            <span class="navi-toggle__icon">&nbsp;</span>
          </label>
        </div>

        <div class="site-header__menu-content">

          <div class="primary-nav">

            <a class="primary-nav--pull-left" href="<?php echo get_home_url(); ?>">
              <span class="primary-nav__home"><span class="primary-nav__home-e">e</span>kristof</span>
            </a>

            <?php
            if(get_theme_mod('first_block_customizer_display') == 'Yes') { ?>
              <div class="primary-nav__btn primary-nav--pull-right">
                <a class="btn" href="<?php echo get_theme_mod('first_block_btn_url'); ?>"><?php echo get_theme_mod('first_block_btn_label'); ?></a>
              </div>
              <?php
            }
            ?>

            <?php
              if(has_nav_menu('header-menu')) { ?>
                <nav class="primary-nav--pull-right">
                  <?php
                    wp_nav_menu(array(
                      'theme-location' => 'header-menu',
                      'menu_class' => 'primary-nav__link-list',
                      'container' => ''
                    ));
                  ?>
                </nav>
              <?php }
            ?>
          </div>

        </div>
      </div>



      <svg class="scroll-to-top">
      <?php echo ekristof_get_svg( array( 'icon' => 'arrow-up' ) ); ?>
      </svg>

    </header>
