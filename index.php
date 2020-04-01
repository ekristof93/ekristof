<?php
  get_header(); ?>

  <?php get_template_part('template-parts/page/blog-header', get_post_format()); ?>
  <div class="page-section page-section--light page-section--medium-padding">
    <div class="wrapper">
      <div class="row row--wide-medium">
        <div class="col-8-of-12">

          <?php
            if(have_posts()) {
              while (have_posts()) {
                the_post(); ?>

                <article class="post generic-content-container generic-content-container--box-shadow">
                  <?php edit_post_link('Szerkesztés', '', '', '', 'btn btn--light post__edit'); ?>
                  <?php get_template_part('template-parts/post/post', 'info'); ?>
                  <h1><a class="post__title headline headline--dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <div class="post__thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('bigger-thumbnail', array('alt' => get_the_title())); ?></a>
                  </div>
                <?php the_excerpt(); ?>
                </article>

            <?php }
            }
            else {
              echo "<p>Nincsenek megjeleníthető cikkek.</p>";
            }
          ?>
          <div class="paginate-links">
            <?php echo paginate_links(); ?>
          </div>
        </div>
        <div class="col-4-of-12">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer();

?>
