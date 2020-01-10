<?php
/**
* Template Name: Проекты
*
*/
get_header();

?>
<style>
body {
    background: linear-gradient(rgba(230,230,230,0.85), rgba(230,230,230, 0.8)), url(<?php echo get_stylesheet_directory_uri() . '/images/background.png'; ?>) no-repeat;
    background-size: 100% 264vh;
    background-position: 30vh -100vh;
}
header {
    background: linear-gradient(180deg, rgba(27, 52, 92, 0.9) -35.06%, rgba(27, 52, 92, 0) 159.4%), url(<?php echo get_stylesheet_directory_uri() . '/images/contacts_page_bckg1.jpg'; ?>);
    background-size: cover;
    background-position: center;
}
.fourMaps a:nth-child(1) {
    z-index: 3;
    background: linear-gradient( rgba(77,92,142,0.5), rgba(77,92,142, 0.7)), url(<?php echo get_stylesheet_directory_uri() . '/images/okno_1.jpg'; ?>);
    background-size: cover;
    background-position: center;
}
.fourMaps a:nth-child(3) {
    z-index: 2;
    background: linear-gradient( rgba(77,92,142,0.5), rgba(77,92,142, 0.7)), url(<?php echo get_stylesheet_directory_uri() . '/images/okno_2.jpg'; ?>);
    background-size: cover;
    background-position: center;
    animation-delay: 0.1s;
}
.fourMaps a:nth-child(5) {
    z-index: 1;
    background: linear-gradient( rgba(77,92,142,0.5), rgba(77,92,142, 0.7)), url(<?php echo get_stylesheet_directory_uri() . '/images/okno_4.jpg'; ?>);
    background-size: cover;
    background-position: center;
    animation-delay: 0.2s;
}
.fourMaps a:nth-child(7) {
    z-index: 0;
    background: linear-gradient( rgba(77,92,142,0.5), rgba(77,92,142, 0.7)), url(<?php echo get_stylesheet_directory_uri() . '/images/okno_3.jpg'; ?>);
    background-size: cover;
    background-position: center;
    animation-delay: 0.3s;
}
</style>

<?php

// wp_get_post_categories(); 
// get_the_category_list();
// get_categories();
// get_the_category();

$args = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => '',
	'show_count'         => 0,
    'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => __( '' ),
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
);

echo '<div class="fourMaps">';
	wp_list_categories( $args );
echo '</div>';

?>


<?php get_footer(); ?>