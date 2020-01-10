<?php
/**
* Template Name: Новости
*
*/
get_header();

?>
<style>
header {
    background: linear-gradient(rgba(27,52,92,0.5), rgba(27,52,92, 0.5)), url(<?php echo get_stylesheet_directory_uri() . '/images/news_mobile.jpg'; ?>);
    background-size: cover;
    background-position: inherit;
}
body {
    background: linear-gradient(rgba(230,230,230,0.85), rgba(230,230,230, 0.8)), url(<?php echo get_stylesheet_directory_uri() . '/images/background.png'; ?>) no-repeat;
    background-size: 100% 264vh;
    background-position: 30vh -100vh;
}
.socCard {
    background-size: cover;
    background-position: center;
    height: 370px;
}
</style>
<nav class="localNav">
	<div>
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
</nav>

<section class="textContent">
	<div class="flex_center">

<?php
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = array(
		'post_type'=>'post',
        'post_status'=>'publish',
		'posts_per_page' => '3',
		'paged' => $paged,
    );

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post(); ?>

            <div class="socCard" style="background: linear-gradient(0deg, rgba(27, 52, 92, 0.5), rgba(27, 52, 92, 0.5)), url(<?php the_post_thumbnail_url(); ?>);">
                <div><?php echo get_the_date('j.m.Y');?></div>
                <h4><?php the_title(); ?></h4>
                <hr>
                <p><?php echo get_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Подробнее</a>
		    </div>

			<?php 
		}
	} else {
		echo 'Новостей не найдено';
	}
?>
</div>

<?php
	// wp_pagenavi( array( 'query' => $query ) );               
	// wp_reset_postdata(); 
?>

<div class="msk-pagination PageSwitcher">
<a href="<?php echo get_pagenum_link( 1 ); ?>">Первая</a>

<?php 

$big = 999999999; // need an unlikely integer
$max = intval( $query->max_num_pages );
// echo $max;
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
	'total' => $query->max_num_pages,
	'prev_text'    => __('<'),
	'next_text'    => __('>'),
) );

wp_reset_postdata();

?>

<a href="<?php echo get_pagenum_link( $max ); ?>">Последняя</a>
</div>

<style>
	.msk-readmore {
		display: none;
	}
	.msk-pagination  a, .msk-pagination  span{
		padding: 8px 15px;
		margin: 0;
		border: 2px solid #A5B3C9;
		text-align: center;
		transition: 0.3s;
		text-decoration: none !important;
		font-size: 18px;
		color: rgba(50, 50, 50, 0.8);
		font-weight: bold;
		margin-left: -2px;
	}
	.msk-pagination  a:hover {
		background: #C4C4C4;
	}
	.current {
		background: rgba(27, 52, 92, 0.68);
    	color: white !important;
	}
</style>

	<!-- </div> -->
</section>




<?php get_footer(); ?>