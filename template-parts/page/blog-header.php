<div class="blog-header">
  <?php
    if(has_header_image()) { 
    getMyBanner('header-image', get_header_image());
  ?>
  <div class="blog-header__content">
    <div class="wrapper">
    <?php
      if(is_search()) { ?>
        <h2 class="headline headline--light headline--no-margin">Keresési eredmények: <?php the_search_query(); ?></h2>
      <?php }
      elseif (is_archive()) {
        the_archive_title( '<h2 class="headline headline--light headline--no-margin">', '</h2>' );
      }
      else { ?>
        <h2 class="headline headline--light headline--no-margin">Blog</h2>
      <?php }
    ?>
    </div>
  </div>
  <?php }
  ?>
</div>
