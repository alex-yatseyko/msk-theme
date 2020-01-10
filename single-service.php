<?php get_header(); ?>
<style>
header {
    background: linear-gradient(180deg, rgba(27, 52, 92, 0.9) -35.06%, rgba(27, 52, 92, 0) 159.4%),url(<?php echo get_stylesheet_directory_uri() . '/images/2871966.jpg'; ?>);
    background-size: cover;
    background-position: center;
}
body {
    background: linear-gradient(rgba(230,230,230,0.85), rgba(230,230,230, 0.8)), url(<?php echo get_stylesheet_directory_uri() . '/images/background.png'; ?>) no-repeat;
    background-size: 100% 264vh;
    background-position: 30vh -100vh;
}
</style>

<nav class="localNav">
	<div>
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
</nav>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <?php the_content(); ?>


<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>