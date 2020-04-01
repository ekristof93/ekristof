<?php
  get_header();

?>

    <?php
      if(get_theme_mod('first_block_customizer_display') == 'Yes') { ?>
      <div class="first-block">

        <?php
        if(has_header_image()) { 
          getMyBanner('header-image header-image--big', get_header_image()); ?>
          <div class="first-block__text-content">
            <div class="wrapper">
              <h1 class="u-no-margin u-margin-top-of-the-page">
                <span class="first-block__title"><?php echo get_theme_mod('first_block_title'); ?></span>
                <span class="first-block__subtitle"><?php echo get_theme_mod('first_block_subtitle'); ?></span>
              </h1>
              <p class="first-block__description"><?php echo get_theme_mod('first_block_description'); ?></p>
              <a class="first-block__btn btn btn--large" href="<?php echo get_theme_mod('first_block_btn_url'); ?>"><?php echo get_theme_mod('first_block_btn_label'); ?></a>
            </div>
          </div>
        <?php }
        ?>
      </div>
      <?php }
    ?>

  <?php
  if(get_theme_mod('introduction_block_customizer_display') == 'Yes') { ?>
    <div id="introduction" class="introduction page-section page-section--light">
      <div class="wrapper wrapper--at-smallest">
        <article class="row">
          <div class="col-7-of-12">
            <h2 class="headline headline--no-t-margin"><?php echo get_theme_mod('introduction_block_title'); ?></h2>
            <div class="generic-content-container">
              <?php echo wpautop(get_theme_mod('introduction_block_text')); ?>
            </div>
          </div>
          <div class="col-5-of-12">
            <img class="introduction__image" src="<?php echo wp_get_attachment_url(get_theme_mod('introduction_block_pic')); ?>" alt="Kristóf">
          </div>
        </article>
      </div>
    </div>
  <?php }
  ?>

  <?php
  if(get_theme_mod('btn_block_customizer_section_display') == 'Yes') { ?>
    <div id="blog-section" class="blog-section page-section page-section--dark" style="background-image: linear-gradient(rgba(51,45,45, .9), rgba(51,45,45, .9)), url(<?php echo wp_get_attachment_url(get_theme_mod('btn_block_pic')); ?>);">
      <div class="wrapper wrapper--narrow wrapper--centered">
        <div class="generic-content-container">
          <?php echo wpautop(get_theme_mod('btn_block_text')); ?>
          <a class="btn btn--large u-margin-top-small" href="<?php the_permalink(get_theme_mod('btn_block_url')); ?>"><?php echo get_theme_mod('btn_block_label'); ?></a>
        </div>
      </div>
    </div>
  <?php }
  ?>

  <?php
  if(get_theme_mod('post_query_block_customizer_display') == 'Yes') { ?>
    <div id="posts" class="posts page-section page-section--light">
      <div class="wrapper">
        <h2 class="headline headline--no-t-margin headline--centered headline--margin-bottom-small">A legutóbbi bejegyzések a <?php echo get_theme_mod('post_query_block_cat_name'); ?> témában</h2>
        <div class="row">
          <?php
          $munkaPostok = new WP_Query(array(
            'cat' => get_cat_ID(get_theme_mod('post_query_block_cat_name'))
          ));

          if($munkaPostok->have_posts()) {
            while ($munkaPostok->have_posts()) {
              $munkaPostok->the_post(); ?>
              <div class="col-1-of-3">
                <div class="posts__item">
                  <a href="<?php the_permalink(); ?>"><h3 class="headline headline--framed headline--smaller"><?php the_title(); ?></h3></a>
                  <a class="posts__image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail', array('alt' => get_the_title())); ?></a>
                  <article class="generic-content-container">
                    <p class="posts__text"><?php echo get_the_excerpt(); ?></p>
                  </article>
                </div>
              </div>
            <?php }
          }
          else {
            echo "<p>Nincsenek megjeleníthető cikkek.</p>";
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  <?php }
  ?>

  <?php get_footer();

  ?>
