<?php

function ekristof_get_svg( $args = array() ) {
	// Make sure $args are an array.
	if ( empty( $args ) ) {
		return 'Please define default parameters in the form of an array.';
	}

	// Define an icon.
	if ( false === array_key_exists( 'icon', $args ) ) {
		return 'Please define an SVG icon filename.';
	}

	$defaults = array(
		'icon'        => '',
		'title'       => '',
		'desc'        => '',
		'fallback'    => false,
	);

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	// Set aria hidden.
	$aria_hidden = ' aria-hidden="true"';

	// Set ARIA.
	$aria_labelledby = '';

	/*
	* Non-decorative icons are described with .screen-reader-text.
	*
	* Child themes can use the title and description to add information to non-decorative SVG icons to improve accessibility.
	*
	* Example 1 with title: <?php echo ekristof_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ) ) ); ?>
	*
	* Example 2 with title and description: <?php echo ekristof_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ), 'desc' => __( 'This is the description', 'textdomain' ) ) ); ?>
	*/

	if ( $args['title'] ) {
		$aria_hidden     = '';
		$unique_id       = uniqid();
		$aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';

		if ( $args['desc'] ) {
			$aria_labelledby = ' aria-labelledby="title-' . $unique_id . ' desc-' . $unique_id . '"';
		}
	}

	// Begin SVG markup.
	$svg = '<svg class="icon icon--' . esc_attr( $args['icon'] ) . '"' . $aria_hidden . $aria_labelledby . ' role="img">';

	// Display the title.
	if ( $args['title'] ) {
		$svg .= '<title id="title-' . $unique_id . '">' . esc_html( $args['title'] ) . '</title>';

		// Display the desc only if the title is already set.
		if ( $args['desc'] ) {
			$svg .= '<desc id="desc-' . $unique_id . '">' . esc_html( $args['desc'] ) . '</desc>';
		}
	}

	$svg_icons = get_theme_file_uri('assets/images/sprite.defs.svg');
	
	$svg .= ' <use xlink:href="' . $svg_icons . '#' . esc_html( $args['icon'] ) . '"></use> ';

	// Add some markup to use as a fallback for browsers that do not support SVGs.
	/*if ( $args['fallback'] ) {
		$svg .= '<span class="svg-fallback ' . esc_attr( $args['icon'] ) . '"></span>';
	} */

	$svg .= '</svg>';

	return $svg;
}

function ekristof_nav_menu_social_icons( $item_output, $item, $depth, $args ) {

	$social_icons = ekristof_social_links_icons();

	if ( 'social-links' === $args->theme_location ) {
		foreach ( $social_icons as $attr => $value ) {
			if ( false !== strpos( $item_output, $attr ) ) {
				$item_output = str_replace( $args->link_after, '</span>' . ekristof_get_svg( array( 'icon' => esc_attr( $value ) ) ), $item_output );
			}
		}
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'ekristof_nav_menu_social_icons', 10, 4 );

function ekristof_social_links_icons() {
	$social_links_icons = array(
		'mailto:'         => 'mail',
		'facebook.com'    => 'facebook',
		'plus.google.com' => 'google-plus',
		'github.com'      => 'github',
		'instagram.com'   => 'instagram',
		'linkedin.com'    => 'linkedin',
		'skype.com'       => 'skype',
		'skype:'          => 'skype',
		'twitter.com'     => 'twitter',
		'wordpress.org'   => 'wordpress',
		'wordpress.com'   => 'wordpress',
		'youtube.com'     => 'youtube',
	);

	return apply_filters( 'ekristof_social_links_icons', $social_links_icons );
}
