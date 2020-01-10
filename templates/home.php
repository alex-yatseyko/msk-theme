<?php
/**
* Template Name: Главная
*
*/

get_header(); ?>
<style>
		body{
			background: none
		}
		header{
			background: none;
		}
		main .mainCards{
			width: 80vw;
			margin:0 auto;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
		}
		.mainCards .goL,
		.mainCards .goR{
			border-color:#fff;
			position: absolute;
		}
		.mainCards .goL{
			left:10%;
		}
		.mainCards .goR{
			right:10%;
		}
		main .mainCards .maincard{
			min-width: 100px;
			margin: 20px;
			height:135px;
			padding: 30px 40px 10px 50px;
			border-radius: 30px;
			background: rgba(255, 255, 255, 0.7);
		}
		main .mainCards .maincard img{
			height:60px;
		}
		main .mainCards .maincard p{
			color: rgba(27, 52, 92, 0.8);
			font-size: 18px;
			font-weight: bold;
			width: 150px;
		}
		main .mainCards .maincard:nth-of-type(5) p{
			width: 250px;
		}
    </style>
	<style>
		.flex_center .projectcard div a {
			transition: .4s;
		}
		.flex_center .projectcard div a:hover {
			background: #fff;
			color: #000;
		}
		#main {
			background: linear-gradient( rgba(27,52,92,0.5), rgba(27,52,92, 0.5)), url(<?php echo get_stylesheet_directory_uri() . '/images/mapnews3.png'; ?>);
			background-size: cover;
    		background-position: center;
		}
    </style>
	<div class="mainCards">
		<div class="maincard">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/IconCity.png"; ?>' alt="">
			<p>КАПИТАЛЬНОЕ СТРОИТЕЛЬСТВО</p>
		</div>
		<div class="maincard">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/IconPaint.png"; ?>' alt="">
			<p>КАПИТАЛЬНЫЙ РЕМОНТ</p>
		</div>
		<div class="maincard">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/IconDesign.png"; ?>' alt="">
			<p>ПРОЕКТИРОВАНИЕ</p>
		</div>
		<div class="maincard">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/IconСhurch.png"; ?>' alt="">
			<p>РЕКОНСТРУКЦИЯ</p>
		</div>
		<div class="maincard">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/IconCity.png"; ?>' alt="">
			<p>ОСУЩЕСТВЛЕНИЕ ФУНКЦИЙ ТЕХНИЧЕСКОГО ЗАКАЗЧИКА</p>
		</div>
		<div class="maincard">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/IconDesign.png"; ?>' alt="">
			<p>РЕСТАВРАЦИЯ</p>
		</div>
		<div class="maincard">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/IconСhurch.png"; ?>' alt="">
			<p>ЗАРУБЕЖНОЕ СТРОИТЕЛЬСТВО</p>
		</div>
		<div class="goL"></div>
		<div class="goR"></div>
	</div>
	</main><h2 class="heading">Наши строительные проекты</h2>
<div class="flex_center mobvers" style="max-width: 1200px">


<?php
	$args = array(
		'posts_per_page' => 8,
		'post_type'=>'project',
		'post_status'=>'publish'
	);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post(); ?>
			<?php
					$image = get_field('cover');
					if( !empty( $image ) ): ?>
			<div  class="projectcard">
				<div class="projectcardContent" style="background: linear-gradient(0deg, #1B345C 0%, rgba(255, 255, 255, 0.17) 100%), url(<?php echo esc_url($image['url']); ?>); background-size: cover;">
					<div>
						<span><?php echo the_title(); ?></span>
						<p><?php echo get_field('city'); ?></p>
						<a href="<?php the_permalink(); ?>">Подробнее</a>
						
					</div>
				</div>
			</div>
					<?php endif; ?>
			<?php 
		}
	} else {
		echo 'Проектов не найдено';
	}
	wp_reset_postdata();
?>

</div>

<h2 class="heading">Новости</h2>
<div 
	class="flex_center mobvers"
	style="max-width: 1200px; align-items: baseline;"
>
<?php
	$args = array(
		'posts_per_page' => 3,
		'post_type'=>'post',
		'post_status'=>'publish'
	);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post(); ?>

			<div class="newscards">
				<div class="img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span><?php echo get_the_date('j.m.Y');?></span>
				<p><?php echo get_excerpt(); ?></p>
			</div>
			<?php 
		}
	} else {
		echo 'Новостей не найдено';
	}
	wp_reset_postdata();
?>
</div>

<h2 class="heading">О компании</h2>
<section class="СМСDevelopment">
	<h3>МСК Международная Строительная Компания</h3>
	<p>Строительная компания «МСК» включает в себя комплексное проектирование, строительство гражданских и промышленных объектов, а так же рекреационных и спортивных комплексов, культурно-деловых центров, жилых и общественных зданий, инженерных коммуникаций, автомобильных дорог, объектов энергетики, гидротехнических сооружений. Профессиональный опыт штатных сотрудников «МСК» и сотрудничество с лучшими российскими и зарубежными архитекторами, строителями и дизайнерами гарантируют высокое качество и международный уровень нашей работы. Это подтверждается наличием ряда престижных наград Российских и международных выставок и конкурсах, в которых наши специалисты принимали участие.</p>
	<h3>Высокий международный уровень нашей работы обеспечивается:</h3>
	<div class="mobstruct">
		<img src="<?php echo get_stylesheet_directory_uri() . '/images/factor_points.png'; ?>" alt="">
		<div class="mobstructtext">
			<p>- эффективными современными технологиями управления;</p>
			<p>- высокими стандартами корпоративной культуры;</p>
			<p>- оптимальным сочетанием инновационных технологий с надежными и проверенными методами;</p>
			<p>- отработанными процедурами взаимодействия с органами власти и управления;</p>
			<p>- высоким уровнем профессионализма штатных сотрудников компании, а так же привлекаемых к нашим проектам лучших российских и зарубежных специалистов;</p>
			<p>- развитой материальной базой;</p>
			<p>- прозрачностью ведения дел;</p>
			<p>- грамотным маркетингом.</p>
		</div>
	</div>
	<div class="flex_center">
		<div data-inf="- эффективными современными технологиями управления;" class="ray"></div>
		<div data-inf="- высокими стандартами корпоративной культуры;" class="ray"></div>
		<div data-inf="- оптимальным сочетанием инновационных технологий с надежными и проверенными методами;" class="ray"></div>
		<div data-inf="- отработанными процедурами взаимодействия с органами власти и управления;" class="ray"></div>
		<div data-inf="- высоким уровнем профессионализма штатных сотрудников компании, а так же привлекаемых к нашим проектам лучших российских и зарубежных специалистов;" class="ray"></div><div data-inf="- развитой материальной базой;" class="ray"></div>
		<div data-inf="- прозрачностью ведения дел;" class="ray"></div>
		<div data-inf="- грамотным маркетингом." class="ray"></div>
	</div>
</section>
<section class="textimg">
	<p class="lefttext">На сегодняшний день компания «МСК» может предложить полный комплекс услуг в области девелопмента, проектирования, строительства и консалтинга: от разработки концептуальной идеи, бизнес-плана и проекта, до строительства объекта "под ключ". При этом компания сочетает использование международных технологий и стандартов со знанием специфических особенностей региона-заказчика. Учитывая все требования и предлагая наиболее эффективное решение, принимая на себя часть ответственности за дальнейший успех реализуемого проекта. Мы ориентируется на оптимальное соотношение цены и качества, организацию оптимального управления проектированием и капитальным строительством. Использование современных строительных технологий и отработанных процедур эффективного взаимодействия с органами власти и управления позволяет решать поставленные задачи в кратчайшие сроки. Компания полностью отвечает перед заказчиком за осуществление комплекса подрядных работ и их надлежащее качество. </p>
	<div class="rightimg" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/2871966.jpg'; ?>) "></div>
</section>
	<p class="lasttext">Наша компания является надежным и честным бизнес-партнером, что обеспечивается принципом прозрачности ведения дел, а также пристальным вниманием к обеспечению конфиденциальности информации о взаимоотношениях с партнерами. Успех компании базируется на эффективном менеджменте, грамотном маркетинге и профессионализме сотрудников.</p>

<?php get_footer(); ?>