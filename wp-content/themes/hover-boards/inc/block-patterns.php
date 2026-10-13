<?php
/**
 * Hover Boards: Block Patterns
 *
 * @since Hover Boards 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function hover_boards_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Hover Boards 1.0
 *
 * @return void
 */
function hover_boards_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'hover-boards' ),
			'categories' => array( 'hover-boards-headers' ),
			'blockTypes' => array( 'parts/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'hover-boards' ),
			'categories' => array( 'hover-boards-footers' ),
			'blockTypes' => array( 'parts/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'hover-boards' ),
			'categories' => array( 'hover-boards-home-banner' ),
		),
		'category-section' => array(
			'title'      => __( 'Category Section', 'hover-boards' ),
			'categories' => array( 'hover-boards-category-section' ),
		),
		'products-section' => array(
			'title'      => __( 'Products Section', 'hover-boards' ),
			'categories' => array( 'hover-boards-products-section' ),
		),
		'testimonial-section' => array(
			'title'      => __( 'Testimonial Section', 'hover-boards' ),
			'categories' => array( 'hover-boards-testimonial-section' ),
		),
		'news-section' => array(
			'title'      => __( 'News Section', 'hover-boards' ),
			'categories' => array( 'hover-boards-news-section' ),
		),
		'faq-section' => array(
			'title'      => __( 'FAQ Section', 'hover-boards' ),
			'categories' => array( 'hover-boards-faq-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'hover-boards' ),
			'categories' => array( 'hover-boards-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'hover-boards' ),
			'categories' => array( 'hover-boards-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'hover-boards' ),
			//'inserter' => false,
			'categories' => array( 'hover-boards-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'hover-boards' ),
			//'inserter' => false,
			'categories' => array( 'hover-boards-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'hover-boards' ),
			//'inserter' => false,
			'categories' => array( 'hover-boards-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'hover-boards' ),
			//'inserter' => false,
			'categories' => array( 'hover-boards-query' ),
		),
		'feature-post-column' => array(
			'title'    => __( 'Feature Post Column', 'hover-boards' ),
			//'inserter' => false,
			'categories' => array( 'hover-boards-query' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'hover-boards' ),
			'categories' => array( 'hover-boards-comment-sections' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'hover-boards' ),
			'categories' => array( 'hover-boards-banner-sections' ),
		),
		'cover-with-search-title' => array(
			'title'    => __( 'Cover With Search Title', 'hover-boards' ),
			'categories' => array( 'hover-boards-banner-sections' ),
		),
		'cover-with-archive-title' => array(
			'title'    => __( 'Cover With Archive Title', 'hover-boards' ),
			'categories' => array( 'hover-boards-banner-sections' ),
		),
		'cover-with-index-title' => array(
			'title'    => __( 'Cover With Index Title', 'hover-boards' ),
			'categories' => array( 'hover-boards-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'hover-boards' ),
			'categories' => array( 'hover-boards-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'hover-boards-footers' => array( 'label' => __( 'Footers', 'hover-boards' ) ),
		'hover-boards-headers' => array( 'label' => __( 'Headers', 'hover-boards' ) ),
		'hover-boards-pages'   => array( 'label' => __( 'Pages', 'hover-boards' ) ),
		'hover-boards-query'   => array( 'label' => __( 'Query', 'hover-boards' ) ),
		'hover-boards-sidebars'   => array( 'label' => __( 'Sidebars', 'hover-boards' ) ),
		'hover-boards-home-banner'   => array( 'label' => __( 'Home Banner', 'hover-boards' ) ),
		'hover-boards-products-section'   => array( 'label' => __( 'Products Section', 'hover-boards' ) ),
		'hover-boards-category-section'   => array( 'label' => __( 'Category Section', 'hover-boards' ) ),
		'hover-boards-testimonial-section'   => array( 'label' => __( 'Testimonial Section', 'hover-boards' ) ),
		'hover-boards-news-section'   => array( 'label' => __( 'News Section', 'hover-boards' ) ),
		'hover-boards-faq-section'   => array( 'label' => __( 'FAQ Section', 'hover-boards' ) ),
		'hover-boards-comment-section'   => array( 'label' => __( 'Comment Sections', 'hover-boards' ) ),
		'hover-boards-theme-button'   => array( 'label' => __( 'Theme Button Sections', 'hover-boards' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Hover Boards 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'hover_boards_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Hover Boards 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'hover_boards_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = hover_boards_get_pattern_content( $block_pattern );
		register_block_pattern(
			'hover-boards/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'hover_boards_register_block_patterns', 9 );
