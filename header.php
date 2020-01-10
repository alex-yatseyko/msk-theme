<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title><?php echo the_title(); ?></title>
	<?php
				global $wp;
				$page_url = home_url( $wp->request );
	?>
    <style>
		html, body {
			overflow-x: hidden !important;
		}
        @font-face {
            font-family: "Futura PT";
            /* src:url(<?php // echo get_stylesheet_directory_uri() . '/fonts/FuturaPT-Light.ttf' ?>); */
            src:url(<?php echo get_template_directory_uri() . '/fonts/FuturaPT-Light.ttf' ?>);
        }
        @font-face {
            font-family: "FuturaPT-Medium";
            /* src:url(<?php // echo get_stylesheet_directory_uri() . '/fonts/FuturaPT-Medium.ttf' ?>); */
            src:url(<?php echo get_template_directory_uri() . '/fonts/FuturaPT-Medium.ttf' ?>);
		}
		.homeicon {
			background-image: url('http://msk.hostenko.com/wp-content/themes/MSK/images/msk_logo_top 1.png');
			background-repeat: no-repeat;
			background-position: left;
			padding-left: 0px;
			padding-bottom: 75px;
    		background-size: cover;
		}
		.homeicon a {
			color: transparent !important;
		}
		.logo-wrapper {
			position: absolute;
			top: 0;
			right: 0;
			left: 0;
			left: 50%;
			transform: translate(-10%);
			display: none;
		}
		header .headerNav > ul ul, header hr {
			display: none;
			position: absolute;
			background: #fff;
			color: #000;
			transition: .3s;
		}
		.headerNav > ul ul a {
			color: #000;
		}
		@media screen and (max-width: 1000px) {
			hr {
				display: none;
				height: 0px !important;
			}
			.menu-item-has-children a {
				pointer-events: none;
				cursor: default;
			}
			.menu-item-has-children a:after {
				content: '';
				background: url("<?php echo get_stylesheet_directory_uri() . '/images/submenubtn.png'; ?>");
				width: 50px;
				height: 50px;
				position: absolute;
				margin-top: 4px;
				transform: scale(.6);
				background-repeat: no-repeat;
				z-index: 999999999999 !important;
			}
			.menu-item-has-children ul a:after {
				display: none;
			}
			header .headerNav > ul label.toggleSubMenu {
				position: absolute;
				top: 0;
				right: 0;
				width: 100%;
				height: 100%;
				cursor: pointer;
				display: block;
			}
		}
    </style>
    <?php
		wp_head();
    ?>
</head>
<body>
<input class="headerTrigger" type="checkbox">
<div class="mobileHeader">
	<img src="<?php echo get_stylesheet_directory_uri() . '/images/mobilebtn.png';?>" alt="">
	<img src="<?php echo get_stylesheet_directory_uri() . '/images/logo_mobile_top 2.png';?>" alt="">
</div>
    <main id="main" style="" >
	<header>
		<nav class="headerNav">
					<?php wp_nav_menu( [ 
						'menu_class' => 'menu-header ',
						'theme_location'  => 'primary',
						'container' => 'ul',
						'before'    => '<input type="checkbox" class="toggleSubMenu" id="sub_m1">',
						'after'		=> '<label class="toggleSubMenu" for="sub_m1"></label>'
					] ); ?>
		</nav>
		<hr>
		<div class="headerContacts">
			<div>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/headerphone.png';?>" alt="">
				<p>+7 (862) 296-58-00</p>
			</div>
			<div>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/headermail.png';?>" alt="">
				<p>info@cmc-development.ru </p>
			</div>
		</div>
		<div class="headerLanguages">
			<p>English version of the site</p>
			<a href="<?php echo home_url() . '/en'; ?>"><img src='<?php echo get_stylesheet_directory_uri() . "/images/eng_png.png"; ?>' alt=""></a>
			<a href="<?php echo home_url(); ?>"><img src='<?php echo get_stylesheet_directory_uri() . "/images/rus_png.png"; ?>' alt=""></a>
		</div>
        <h1 class="header-page-name"><?php 	
                if ( is_home() || is_front_page() || is_404()) {
                    echo '';
                } else {
                    echo $post->post_title; 
                }        
            ?></h1>
	</header>