<?php get_header(); ?>

<h2 class="error-text">Ошибка 404 - Не найдено</h2>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
header {
    background: linear-gradient(180deg, rgba(27, 52, 92, 0.9) -35.06%, rgba(27, 52, 92, 0) 159.4%), url(<?php echo get_stylesheet_directory_uri() . '/images/contacts_page_bckg1.jpg'; ?>);
    background-size: cover;
    background-position: center;
    min-height: 116px;
}

header {
    background: linear-gradient(180deg, rgba(27, 52, 92, 0.9) -35.06%, rgba(27, 52, 92, 0) 159.4%),url(http://localhost:8888/Intensiv/wp-content/themes/MSK/images/2871966.jpg);
    background-size: cover;
    background-position: center;
}
body {
    background: linear-gradient(rgba(230,230,230,0.85), rgba(230,230,230, 0.8)), url(http://localhost:8888/Intensiv/wp-content/themes/MSK/images/background.png) no-repeat;
    background-size: 100% 264vh;
    background-position: 30vh -100vh;
}
.error-text {
    text-align: center;
    color: #323232;
    font-size: 4rem;
    margin: 7rem;
}

</style>