<?php printf(wp_footer()); ?>

<?php
if(has_nav_menu('social-links')) { ?>
  <div class="page-section page-section--light page-section--little-padding">
    <div class="wrapper wrapper--centered">
      <h2 class="headline headline--smaller">Kapcsolat</h2>
      <nav>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'social-links',
          'menu_class' => 'social-links',
          'link_before' => '<span class="screen-reader-text">',
          'link_after' => '</span>' . ekristof_get_svg( array( 'icon' => 'link' ))
        ) );
        ?>
      </nav>
    </div>
  </div>
<?php }
?>

<footer class="page-section page-section--dark page-section--little-padding">

  <div class="wrapper wrapper--centered">

    <?php if(is_active_sidebar('footer1') || is_active_sidebar('footer2') || is_active_sidebar('footer3')) { ?>
      <div class="row">
      <?php
      if(is_active_sidebar('footer1')) { ?>
        <div class="col-1-of-2 col-1-of-3">
          <?php dynamic_sidebar('footer1'); ?>
        </div>
      <?php }
      ?>
      <?php
      if(is_active_sidebar('footer2')) { ?>
        <div class="col-1-of-2 col-1-of-3">
          <?php dynamic_sidebar('footer2'); ?>
        </div>
      <?php }
      ?>
      <?php
      if(is_active_sidebar('footer3')) { ?>
        <div class="col-1-of-2 col-1-of-3">
          <?php dynamic_sidebar('footer3'); ?>
        </div>
      <?php }
      ?>
    </div>
    <?php } ?>

    <p class="generic-content-container u-no-margin"><?php bloginfo('name'); ?> - &copy; <?php printf(date('Y')); ?></p>
  </div>
</footer>

</body>
</html>
