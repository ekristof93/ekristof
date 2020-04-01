<?php
function ekristof_first_block_customizer($wp_customize) {
  $wp_customize->add_section('first_block_customizer_section', array(
    'title' => 'Első blokk szerkesztése',
    'priority' => 1,
  ));

  $wp_customize->add_setting('first_block_customizer_display', array(
    'default'=> 'No'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first_block_customizer_display_control', array(
    'label' => 'Megjeleníti ezt a blokkot?',
    'section' => 'first_block_customizer_section',
    'settings' => 'first_block_customizer_display',
    'type' => 'select',
    'choices' => array(
      'No' => 'Nem',
      'Yes' => 'Igen'
    )
  )));

  $wp_customize->add_setting('first_block_title', array(
    'default'=> 'A cím helye'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first_block_title_control', array(
    'label' => 'Főcím',
    'section' => 'first_block_customizer_section',
    'settings' => 'first_block_title'
  )));

  $wp_customize->add_setting('first_block_subtitle', array(
    'default'=> 'Alcím helye'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first_block_subtitle_control', array(
    'label' => 'Alcím',
    'section' => 'first_block_customizer_section',
    'settings' => 'first_block_subtitle'
  )));

  $wp_customize->add_setting('first_block_description', array(
    'default'=> 'Rövid leírás'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first_block_description_control', array(
    'label' => 'Rövid leírás',
    'section' => 'first_block_customizer_section',
    'settings' => 'first_block_description',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('first_block_btn_label');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first_block_btn_label_control', array(
    'label' => 'Gomb felirat',
    'section' => 'first_block_customizer_section',
    'settings' => 'first_block_btn_label'
  )));

  $wp_customize->add_setting('first_block_btn_url', array(
    'default' => 'Gomb hivatkozás'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first_block_btn_url_control', array(
    'label' => 'Gomb hivatkozás',
    'section' => 'first_block_customizer_section',
    'settings' => 'first_block_btn_url',
    'type' => 'url'
  )));
}

add_action('customize_register', 'ekristof_first_block_customizer');


function introduction_block_customizer($wp_customize) {
  $wp_customize->add_section('introduction_block_customizer_section', array(
    'title' => 'Bevezetés blokk szerkesztése',
    'priority' => 2,
  ));


  $wp_customize->add_setting('introduction_block_customizer_display', array(
    'default'=> 'No'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'introduction_block_customizer_display_control', array(
    'label' => 'Megjeleníti ezt a blokkot?',
    'section' => 'introduction_block_customizer_section',
    'settings' => 'introduction_block_customizer_display',
    'type' => 'select',
    'choices' => array(
      'No' => 'Nem',
      'Yes' => 'Igen'
    )
  )));

  $wp_customize->add_setting('introduction_block_title', array(
    'default'=> 'A cím helye'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'introduction_block_title_control', array(
    'label' => 'Cím',
    'section' => 'introduction_block_customizer_section',
    'settings' => 'introduction_block_title'
  )));

  $wp_customize->add_setting('introduction_block_text', array(
    'default' => 'Morbi tincidunt justo egestas nibh porttitor porta. Morbi mollis metus risus, a suscipit magna ornare nec. Mauris a tortor tincidunt, egestas massa a, sodales mauris. Pellentesque sit amet auctor sem, nec dictum ante. Nam elementum vitae leo et fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies, dolor vel luctus volutpat, justo augue euismod enim, ut consectetur enim justo non dolor. Fusce venenatis dictum erat, eget semper lectus porta a. Cras euismod commodo ex. Curabitur interdum diam a elit condimentum consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris hendrerit ante justo, non sodales ipsum consectetur nec. Vivamus felis metus, elementum vitae fringilla at, venenatis id elit. Aenean non pellentesque dolor. Etiam interdum cursus erat ac pharetra. '
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'introduction_block_text_control', array(
    'label' => 'Szöveg',
    'section' => 'introduction_block_customizer_section',
    'settings' => 'introduction_block_text',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('introduction_block_pic');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'introduction_block_pic_control', array(
    'label' => 'Kép',
    'section' => 'introduction_block_customizer_section',
    'settings' => 'introduction_block_pic',
    'width' => 600,
    'height' => 700
  )));
}

add_action('customize_register', 'introduction_block_customizer');


function post_query_block_customizer($wp_customize) {
  $wp_customize->add_section('post_query_block_customizer_section', array(
    'title' => 'Bejegyzések kisorolása blokk szerkesztése',
    'priority' => 3,
  ));

  $wp_customize->add_setting('post_query_block_customizer_display', array(
    'default'=> 'No'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'post_query_block_customizer_display_control', array(
    'label' => 'Megjeleníti a "Bejegyzés kisorolás" blokkot?',
    'section' => 'post_query_block_customizer_section',
    'settings' => 'post_query_block_customizer_display',
    'type' => 'select',
    'choices' => array(
      'No' => 'Nem',
      'Yes' => 'Igen'
    )
  )));

  $wp_customize->add_setting('post_query_block_cat_name', array(
    'default'=> 'Kategória'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'post_query_block_cat_name_control', array(
    'label' => 'A megjelenítendő kategória neve',
    'section' => 'post_query_block_customizer_section',
    'settings' => 'post_query_block_cat_name'
  )));
}

add_action('customize_register', 'post_query_block_customizer');


function btn_block_customizer($wp_customize) {
  $wp_customize->add_section('btn_block_customizer_section', array(
    'title' => 'Gomb blokk szerkesztése',
    'priority' => 4,
  ));

  $wp_customize->add_setting('btn_block_customizer_section_display', array(
    'default'=> 'No'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'btn_block_customizer_section_display_control', array(
    'label' => 'Megjeleníti a Gomb blokkot?',
    'section' => 'btn_block_customizer_section',
    'settings' => 'btn_block_customizer_section_display',
    'type' => 'select',
    'choices' => array(
      'No' => 'Nem',
      'Yes' => 'Igen'
    )
  )));

  $wp_customize->add_setting('btn_block_text', array(
    'default'=> 'Szöveg'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'btn_block_text_control', array(
    'label' => 'A Gomb blokk szövege',
    'section' => 'btn_block_customizer_section',
    'settings' => 'btn_block_text',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('btn_block_label', array(
    'default'=> 'Gomb felirat'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'btn_block_label_control', array(
    'label' => 'Gomb blokk gomb felirat',
    'section' => 'btn_block_customizer_section',
    'settings' => 'btn_block_label'
  )));

  $wp_customize->add_setting('btn_block_url', array(
    'default'=> 'Gomb hivatkozása'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'btn_block_url_control', array(
    'label' => 'A Gomb blokk gomb hivatkozása',
    'section' => 'btn_block_customizer_section',
    'settings' => 'btn_block_url',
    'type' => 'dropdown-pages'
  )));

  $wp_customize->add_setting('btn_block_pic');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'btn_block_pic_control', array(
    'label' => 'Kép',
    'section' => 'btn_block_customizer_section',
    'settings' => 'btn_block_pic',
    'width' => 2500,
    'height' => 1481
  )));
}

add_action('customize_register', 'btn_block_customizer');
?>
