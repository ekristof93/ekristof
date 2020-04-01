<?php
  if ( post_password_required() ) {
    return;
  }
?>

<div class="comments generic-content-container generic-content-container--box-shadow">

  <?php
  if ( have_comments() ) { ?>
    <h2 class="comments__title headline headline--framed headline--smaller">
      <?php
      $comments_number = get_comments_number();
      if ( '1' === $comments_number ) {
        echo 'Egy darab hozzászólás a "' . get_the_title() . '" cikkhez';
      } else {
        echo get_comments_number() . ' darab hozzászólás a “' . get_the_title() . '” cikkhez';
      }
      ?>
    </h2>

    <ol class="comments__list">
      <?php
        wp_list_comments( array(
          'avatar_size' => 60,
          'style'       => 'ol',
          'short_ping'  => true,
          'reply_text'  => ekristof_get_svg( array( 'icon' => 'reply' ) ) . '<span class="comments__reply">Válasz</span>',
        ) );
      ?>
    </ol>

    <?php the_comments_pagination( array(
      'prev_text' => '<span class="screen-reader-text"> Előző </span>',
      'next_text' => '<span class="screen-reader-text"> Következő </span>',
    ) );

  }

  if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>

    <p class="comments--no-comments">A hozzászólások le vannak tiltva.</p>
  <?php
  }
  ?>


  <?php
    $comments_args = array(
      'class_submit' => 'btn btn--light'
    );
    comment_form($comments_args);
  ?>

</div>
