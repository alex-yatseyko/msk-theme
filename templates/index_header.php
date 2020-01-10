
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="http://yatseyko.com/about2/cm%D1%81.css">
    <link rel="stylesheet" href="media_cmc.css"> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title><?php echo the_title(); ?></title>
	<style>
		body{
			background: none
		}
		header{
			background: none;
		}
		#main {
			min-height: 100vh;
			width: 100%;
		    background-size: cover;
            background-position: center;
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
        @font-face {
            font-family: "Futura PT";
            src:url(<?php echo get_stylesheet_directory_uri() . '/fonts/FuturaPT-Light.ttf' ?>);
        }
        @font-face {
            font-family: "FuturaPT-Medium";
            src:url(<?php echo get_stylesheet_directory_uri() . '/fonts/FuturaPT-Medium.ttf' ?>);
        }
		/* .headerNav > ul > li a .vec {
			display: block !important;
		} */
		.flex_center .projectcard div a {
			transition: .4s;
		}
		.flex_center .projectcard div a:hover {
			background: #fff;
			color: #000;
		}
    </style>
    <?php
        wp_head();
    ?>
</head>
<body>
<input class="headerTrigger" type="checkbox">
<div class="mobileHeader">
	<img src='<?php echo get_stylesheet_directory_uri() . "/images/mobilebtn.png"; ?>' alt="">
	<img src='<?php echo get_stylesheet_directory_uri() . "/images/logo_mobile_top 2.png"; ?>' alt="">
</div>
    <main id="main" style="background-image: linear-gradient(rgba(27,52,92,0.5), rgba(27,52,92, 0.5)), url(<?php echo get_stylesheet_directory_uri() . '/images/mapnews3.png'; ?>)" >
	<header>
		<nav class="headerNav">
			<ul>
				<li>
					<a href="index.php">Главная</a>
				</li>
				<li>
					<input type="checkbox"class="toggleSubMenu" id="sub_m1">
					<a href="aboutCompany.php?id=1">О компании <img src="<?php echo get_stylesheet_directory_uri() . '/images/submenuBtn.png' ?>"class="vec" alt=""></a>
					<label class="toggleSubMenu" for="sub_m1"></label>
					<ul>
						<li><a href="aboutCompany.php?id=1">О компании</a></li>
						<li><a href="licenses.php?id=2">Лицензии</a></li>
						<li><a href="recomLetters.php?id=3">Рекомендательные письма</a></li>
						<li><a href="partners.php?id=4">Партнеры</a></li>
						<li><a href="socResponsibility.php?id=5">Социальная ответственность</a></li>
					</ul>
				</li>
				<li>
					<a href="news_cmc.php?id=6">Новости</a>
				</li>
				<li>
					<a href="index.php">
					<img class="logo" src='<?php echo get_stylesheet_directory_uri() . "/images/msk_logo_top 1.png" ?>' alt="">
                    </a>
				</li>
				<li>
					<input type="checkbox"class="toggleSubMenu" id="sub_m2">
					<a href="projects.php?id=7">Проекты <img src='<?php echo get_stylesheet_directory_uri() . "/images/submenuBtn.png"; ?>'class="vec" alt=""></a>
					<label class="toggleSubMenu" for="sub_m2"></label>
					<ul>
						<li><a href="projects.php?id=7">Проекты</a></li>
						<li><a href="foreignProject.php?id=15">Зарубежное строительство</a></li>
						<li><a href="capitalProject.php?id=16">Капитальное строительство</a></li>
						<li><a href="socialobjects.php?id=17">Социальные объекты</a></li>
						<li><a href="objectMap.php?id=18">Карта объектов</a></li>
					</ul>
				<li>
					<input type="checkbox"class="toggleSubMenu" id="sub_m3">
					<a href="services.php?id=8">Услуги <img src='<?php echo get_stylesheet_directory_uri() . "/images/submenuBtn.png";?>' class="vec" alt=""></a>
					<label class="toggleSubMenu" for="sub_m3"></label>
					<ul>
						<li><a href="services.php?id=8">Услуги</a></li>
						<li><a href="capital_construction.php?id=9">Капитальное строительство</a></li>
						<li><a href="reconstructionRepair.php?id=10">Реконструкции и кап.ремонт зданий</a></li>
						<li><a href="projection.php?id=11">Проектирование</a></li>
						<li><a href="technical_functions.php?id=12">Осуществление функций тех. заказчика</a></li>
						<li><a href="beautification.php?id=13">Благоустройство</a></li>
					</ul>
				</li>
				<li>
					<a href="Contacts.php?id=14">Контакты</a>
				</li>
			</ul>
		</nav>
		<hr>
		<div class="headerContacts">
			<div>
				<img src='<?php echo get_stylesheet_directory_uri() . "/images/headerphone.png"; ?>' alt="">
				<p>+7 (862) 296-58-00</p>
			</div>
			<div>
				<img src='<?php echo get_stylesheet_directory_uri() . "/images/headermail.png"; ?>' alt="">
				<p>info@cmc-development.ru </p>
			</div>
		</div>
		<div class="headerLanguages">
			<p>English version of the site</p>
			<a href="#"><img src='<?php echo get_stylesheet_directory_uri() . "/images/eng_png.png"; ?>' alt=""></a>
			<a href="#"><img src='<?php echo get_stylesheet_directory_uri() . "/images/rus_png.png"; ?>' alt=""></a>
		</div>
	</header>