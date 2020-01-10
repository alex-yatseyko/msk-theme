<?php
/**
* Template Name: О компанни
*
*/
get_header();

?> 
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

<section class="textContent">
	<h3>Строительная компания "МСК" специализируется на комплексном проектировании и строительстве гражданских и промышленных объектов, таких как:</h3>
	<div class="flex_center" style="max-width: 1300px;">
		<div class="grayCard">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Group7.png';?>" alt="">
			<p>рекреационные и спортивные комплексы</p>
		</div>
		<div class="grayCard">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Group (1).png';?>" alt="">
			<p>культурно- деловые центры</p>
		</div>
		<div class="grayCard">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Group (2).png';?>" alt="">
			<p>жилые и общественные здания</p>
		</div>
		<div class="grayCard">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Group (3).png';?>" alt="">
			<p>инженерные коммуникации</p>
		</div>
		<div class="grayCard">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Group (4).png';?>" alt="">
			<p>автомобильные дороги</p>
		</div>
		<div class="grayCard">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Group (5).png';?>" alt="">
			<p>объекты энергетики</p>
		</div>
		<div class="grayCard">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Group (6).png';?>" alt="">
			<p>гидротехнические сооружения</p>
		</div>
	</div>
	<p>
		Опыт и профессионализм штатных сотрудников компании, а так же сотрудничество с лучшими российскими и зарубежными специалистами (архитекторами, строителями и дизайнерами) гарантирует высокий международный уровень нашей работы.<br><br>Это подтверждается наличием ряда престижных наград на российских и международных выставках и конкурсов, в которых наши специалисты принимали участие.<br><br>На сегодняшний день "МСК" может предложить полный комплекс услуг в области девелопмента, проектирования, строительства и консалтинга - от разработки концептуальной идеи, бизнес-плана и проекта до строительства и сдачи объекта "под ключ". При этом компания сочетает использование международных технологий и стандартов со знанием специфических особенностей региона-заказчика.
	</p>
	<div class="mobstruct">
		<img src="<?php echo get_stylesheet_directory_uri() . '/images/aboutimg.png';?>" alt="">
		<div class="mobstructtext">
			<p>Учитывая все требования и предлагая наиболее эффективное решение, принимая на себя часть ответственности за дальнейший успех реализуемого проекта, мы ориентируемся на оптимальное соотношение цены и качества, организацию оптимального управления проектированием и капитальным строительством.</p>
			<p>Использование современных строительных технологий и отработанных процедур эффективного взаимодействия с органами власти и управления позволяет решать поставленные задачи в кратчайшие сроки.</p>
			<p style="max-width:280px">Компания полностью отвечает перед заказчиком за осуществление комплекса подрядных работ и их надлежащее качество.</p>
			<p>Наша компания является надежным и честным бизнес-партнером, что обеспечивается принципом прозрачности ведения дел, а так же пристальным вниманием к обеспечению конфиденциальности информации о взаимодействиях с партнерами.</p>
			<p>
			<p>Успех компании базируется на эффективном менеджменте, грамотном маркетинге и профессионализме сотрудников.</p>
		</div>
	</div>
	<span class="aboutimg">
		<img src="<?php echo get_stylesheet_directory_uri() . '/images/about_section.png';?>" alt="">
	</span>
</section>

<?php get_footer(); ?>