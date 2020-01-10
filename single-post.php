<?php
/**
*
*
*/
get_header();

global $wp;
global $post; 
$post_title = $post->post_title;
$page_url = home_url( $wp->request );

?> 
<style>
	body{
		background: #fff
	}
    header {
        background: linear-gradient(180deg, rgba(27, 52, 92, 0.9) -35.06%, rgba(27, 52, 92, 0) 159.4%),url(<?php echo get_stylesheet_directory_uri() . '/images/background.png'; ?>);
        background-size: cover;
        background-position: center;
    }
    .header-page-name {
        display: none;
	}
	.content {
		color: black;
	}
	.flex_center .newscards:nth-child(1) .img {
		background: url(images/newsimg3.png);
		background-size: cover;
		background-position: center;
	}
	/* .columnsbox {
		display: flex;
    	flex-direction: column;
	} */
	/* .columnsbox p {
		min-width: 100px;
	} */
</style>
<nav class="localNav">
	<div>
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
</nav>

<div class="columnsbox">
<article class="newColumn">
	<div class="flex_center mobvers">

	<?php
		$args = array(
			'post_type'=>'post',
			'post_status'=>'publish',
			'posts_per_page' => '4',
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>

				<div class="newscards">
					<div class="img" style="background: url(<?php the_post_thumbnail_url(); ?>);    background-size: cover;
    background-position: center;"></div>
					<span><?php echo get_the_date('j.m.Y');?></span>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
				<?php 
			}
		} else {
			echo 'Новостей не найдено';
		}
		wp_reset_postdata();
	?>
	</div>
</article>


<!-- <section class="newitem">
	<div class="content">
		<div class="newDate">
			<img src="images/calendar.png" alt="">
			<p>11.01.2017</p>
			<p class="line">——</p>
			<p>ДЕНЬ ЗАЩИТЫ ДЕТЕЙ 2017</p>
		</div>
		<p class="newText">По инициативе координатора 8-го партийного округа Парнюгиной Л.Н. и Совета ТОС «Центральный» и секретаря Первичного отделения Партии «Единая Россия» Паршина Анатолия Игоревича в январе 2017 года в Районном Доме Культуры состоялся Новогодний утренник. В празднике участвовало 60 детей.</p>
	    <div class="photos">
	      <div class="photo">
	      	<div class="goL"></div>
	      	<div class="goR"></div>
	  	  </div>
	    </div>
	    <div class="toggle-controls">
	      <button class="walden" type="button" data-filter="walden"></button>
	      <button class="toaster" type="button" data-filter="toaster"></button>
	      <button class="kelvin" type="button" data-filter="kelvin"></button>
	      <button class="lebron" type="button" data-filter="lebron"></button>
	    </div>
		<p class="extraText">По инициативе координатора 8-го партийного округа Парнюгиной Л.Н. и Совета ТОС «Центральный» и секретаря Первичного отделения Партии «Единая Россия» Паршина Анатолия Игоревича в январе 2017 года в Районном Доме Культуры состоялся Новогодний утренник. В празднике участвовало 60 детей.</p>
		<div class="newsFooter">
			<div class="viewed">
				<img src="images/eye.png" alt="">
				<div class="viewedNumber">3 234</div>
			</div>
			<div class="socNets">
				<p>Поделиться</p>
				<a href="#" class="socNet">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="#" class="socNet">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="#" class="socNet">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="#" class="socNet">
					<i class="fa fa-vk" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<div style="clear:both;"></div>
</div> -->



<section class="newitem">
	<div class="content">
		<div class="newDate">
			<img src='<?php echo get_stylesheet_directory_uri() . "/images/calendar.png" ;?>' alt="">
			<p><?php echo get_the_date('j.m.Y');?></p>
			<p class="line">——</p>
			<p><?php the_title(); ?></p>
		</div>

        <?php the_content(); ?>

		<div class="newsFooter">
			<div class="viewed">
				<img src='<?php echo get_stylesheet_directory_uri() . "/images/eye.png"; ?>' alt="">
				<div class="viewedNumber">Просмотров:   
					<span> 
						<?php setPostViews(get_the_ID()); 
							echo getPostViews(get_the_ID());
						?>
					</span>
				</div>
			</div>
			<div class="socNets">
				<p>Поделиться</p>
				<a href="//www.facebook.com/sharer.php?u=<?php echo $page_url; ?>" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" target="_blank"  class="socNet">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="//twitter.com/share?url=<?php echo $page_url; ?>" data-label="Twitter" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" target="_blank"  class="socNet">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="https://t.me/share/url?url=<?php echo $page_url; ?>/&title=<?php echo $post_title; ?>" data-label="Telegram" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" target="_blank"  class="socNet">
					<i class="fa fa-telegram" aria-hidden="true"></i>
				</a>
				<a href="https://vk.com/share.php?url=<?php echo $page_url; ?>" data-label="VK" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" target="_blank"  class="socNet">
					<i class="fa fa-vk" aria-hidden="true"></i>
				</a>

				<!-- <a href="//twitter.com/share?url=http://samanthawild.com/free-will/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter tooltipstered"><i class="icon-twitter"></i></a> -->

				<!-- https://vk.com/share.php?url=https://habr.com/ru/post/156185/ -->

				<!-- <a href="#" class="socNet">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="#" class="socNet">
					<i class="fa fa-telegram" aria-hidden="true"></i>
				</a>

				https://t.me/share/url?url=https://habr.com/ru/post/156185/&title=Элементарные социальные share-кнопки

				<a href="#" class="socNet">
					<i class="fa fa-vk" aria-hidden="true"></i>
				</a> -->
			</div>
		</div>
	</div>
</section>
<div style="clear:both;"></div>
</div>




<?php get_footer(); ?>