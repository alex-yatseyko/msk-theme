<?php
/**
* Template Name: Услуги
*
*/
get_header();

?>
<style>
#main {
    background: linear-gradient(rgba(27,52,92,0.5), rgba(27,52,92, 0.5)), url(<?php echo get_stylesheet_directory_uri() . '/images/services_mobile.jpg'; ?>);
    background-size: contain;
    background-position: center;
}
</style>
<nav class="localNav">
	<div>
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
</nav>

<div class="flex_center"style="width: 100%;margin:0">
	<div class="squereline">

    <?php
	$args = array(
		'posts_per_page' => 3,
		'post_type'=>'service',
		'post_status'=>'publish'
	);
	$query = new WP_Query( $args );

	while ( $query->have_posts() ) {
			$query->the_post(); ?>
			<?php
				$image = get_field('izobrazhenie');
				if( !empty( $image ) ): ?>
			<a href="<?php the_permalink(); ?>" class="service lil" style="background: linear-gradient(180deg, #1B345C 0%, rgba(27, 52, 92, 0.2) 100%), url(<?php echo esc_url($image['url']); ?>); background-size: cover; background-position: center;">
				<h3><?php the_title(); ?></h3>
			</a>
				<?php endif; ?>
			<?php 
		}
		wp_reset_postdata();
	?>
	</div>
	<div class="squereline">
		<?php
	$args = array(
		'posts_per_page' => 2,
		'offset' => 3,
		'post_type'=>'service',
		'post_status'=>'publish'
	);
	$query = new WP_Query( $args );

	while ( $query->have_posts() ) {
			$query->the_post(); ?>
			<?php
				$image = get_field('izobrazhenie');
				if( !empty( $image ) ): ?>
			<a href="<?php the_permalink(); ?>" class="service big" style="background: linear-gradient(180deg, #1B345C 0%, rgba(27, 52, 92, 0.2) 100%), url(<?php echo esc_url($image['url']); ?>); background-size: cover; background-position: center;">
				<h3><?php the_title(); ?></h3>
			</a>
				<?php endif; ?>
			<?php 
		}
		wp_reset_postdata();
	?>
	</div>
</div>