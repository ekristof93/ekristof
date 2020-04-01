<?php

function ekristof_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'ekristof_custom_header_args', array(
		'default-image'      => get_parent_theme_file_uri( '/assets/images/code.jpg' ),
		'width'              => 3386,
		'height'             => 1208
		) ) );

		register_default_headers( array(
			'default-image' => array(
				'url'           => '%s/assets/images/code.jpg',
				'thumbnail_url' => '%s/assets/images/code.jpg',
				'description'   => 'Alapértelmezett fejrész',
			),
		) );
	}
	add_action( 'after_setup_theme', 'ekristof_custom_header_setup' );


	?>
