<p class="post__info">
  <?php the_time('Y.m.d. H:i'); ?> |
  <a class='post__info-link' href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php
  $categories = get_the_category();
  $separator = ", ";
  $output = '';

  if($categories) {
    foreach ($categories as $category) {
      $output .= "<a class='post__info-link' href=" . get_category_link($category->term_id) . ">$category->cat_name</a>" . $separator;
    }

    echo trim($output, $separator);
  }
  ?>
</p>
