<?php
function ekristof_widgets_init() {
  register_sidebar(array(
    'name' => 'Header 1',
    'id' => 'header1',
    'before_widget' => '<div class="widget generic-content-container">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="headline headline--framed headline--smaller">',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => 'Footer 1',
    'id' => 'footer1',
    'before_widget' => '<div class="widget generic-content-container">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="headline headline--framed headline--smaller">',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => 'Footer 2',
    'id' => 'footer2',
    'before_widget' => '<div class="widget generic-content-container">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="headline headline--framed headline--smaller">',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => 'Footer 3',
    'id' => 'footer3',
    'before_widget' => '<div class="widget generic-content-container">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="headline headline--framed headline--smaller">',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init', 'ekristof_widgets_init');
?>
