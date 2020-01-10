<?php
/**
*
*
*/
get_header();

?> 
<style>
.header-page-name {
    display: none;
}
header {
    background: linear-gradient(180deg, rgba(27, 52, 92, 0.9) -35.06%, rgba(27, 52, 92, 0) 159.4%), url(<?php echo get_stylesheet_directory_uri() . '/images/contacts_page_bckg1.jpg'; ?>);
    background-size: cover;
    background-position: center;
    min-height: 116px;
}
.projectInfo_img {
	width: 206px;
	height: 137px;
}
.unstyled-link {
	text-decoration: none;
	color: #fff;
}
</style>
<div id="App">

<div class="foreignMap">
<!-- <button @click="somethingElse">Test method</button> -->
<div class="vue-list">
	<ul>
		<li 
			v-for="(p, index) of projects"
			@click="selectProject(index, projects)"
			:class="{'active' : selectedProjectIndex === index}"
		>
			
			{{ p.title.rendered }}
			<p>{{ p.acf.city }}</p>
			<img v-bind:src="p.acf.cover.url" /> 
		</li>
	</ul>
	<div v-if="loading">Loading...</div>
	<transition name="contentAnimation">
		<div v-if="showContent" class="content">
			<img 
				:src="project.acf.logo_zakazchika.url" 
				:alt="project.title.rendered"
			/> 
			<p>{{ project.acf.nazvanie_zakazchika }}</p>
				<img 
					v-for="(img, imgIndex) of project.acf.foto_dlya_slajdera"
					:src="project.acf.foto_dlya_slajdera[imgIndex].url" 
					:alt="project.title.rendered"
				/> 
			<p>{{ project.content.rendered.slice(3).slice(0, -5) }}</p>
		</div>
	</transition>
</div>
	<div class="mapnews">
		<div class="mapnewsHeader">
			<a href="<?php echo get_home_url() . '/proekty'; ?>" class="arrow"></a>
			<a href="<?php echo get_home_url() . '/proekty'; ?>" class="unstyled-link"><h2>ПРОЕКТЫ</h2></a>
			<h4><?php single_term_title(); ?></h4>
		</div>
		<div class="mapNewsContent">



		<div 
			class="projectInfo"
			v-for="(p, index) of projects"
			@click="selectProject(index, projects)"
			:class="{'active' : selectedProjectIndex === index}"
		>
						<div class="projectInfo_img" style="background: url(<?php echo esc_url($image['url']); ?>); background-size: cover;"></div>
						<div class="liltext">
							<h5>{{ p.title.rendered }}</h5>
							<hr>
							<span>{{ p.acf.city }}</span>
						</div>
					</div>



		<?php
			$args = array(
				'posts_per_page' => -1,
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

					<div class="projectInfo">
						<div class="projectInfo_img" style="background: url(<?php echo esc_url($image['url']); ?>); background-size: cover;"></div>
						<div class="liltext">
							<h5><?php the_title(); ?></h5>
							<hr>
							<span><?php echo get_field('city'); ?></span>
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
	  </div>


	  <?php
			$args = array(
				'posts_per_page' => -1,
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

<div class="moreInfo">
	  	<img src="<?php echo get_stylesheet_directory_uri() . '/images/udprf 1.png'; ?>" alt="">
		<section class="newitem">
			<div class="content">
				<div class="liltext">
					<h5>Оказание услуг по осуществлению функций технического заказчика для ...</h5>
					<hr>
					<span><?php echo get_the_date('j.m.Y');?></span>
				</div>
				<p class="newText"><?php echo get_the_content();?></p>
			    <div class="photos">
			      <div class="photo">
			      	<img src="<?php echo get_stylesheet_directory_uri() . '/images/mapnews1.png'; ?>" alt="">
			      	<div class="goL"><div></div></div>
			      	<div class="goR"><div></div></div>
			  	  </div>
			    </div>
			    <div class="toggle-controls">
			      <button class="walden" type="button" data-filter="walden">
			      	<img src="<?php echo get_stylesheet_directory_uri() . '/images/mapnews1.png'; ?>" alt="">
			      </button>
			      <button class="toaster" type="button" data-filter="toaster">
			      	<img src="<?php echo get_stylesheet_directory_uri() . '/images/tokyo2.jpg'; ?>" alt="">
			      </button>
			    </div>
				<p class="extraText"><?php echo get_the_content();?></p>
			</div>
		</section>
	  </div>
					<?php endif; ?>
					<?php 
				}
			} else {
				echo 'Проектов не найдено';
			}
			wp_reset_postdata();
		?>



	<iframe id="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aeaacb8c62ece6ddc054f374dd1efd776192650fe1cdd2cff89fac8c3021bddae&amp;source=constructor" width="100%" height="683" frameborder="0"></iframe>
	<div v-if="showContent" @click="closeContent" class="cross">
		<img src="<?php echo get_stylesheet_directory_uri() . '/images/cross.png'; ?>" alt="">
	</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
<script>

// document.getElementById('App').__vue__.$data - to show Vue data in a console

new Vue({
	el: '#App',
	data: {
		loading: true,
		showContent: false,
		projects: null,
		project: '',
		selectedProjectIndex: 999
	},
	methods: {
		selectProject: (index, projects) => {
			document.getElementById('App').__vue__.$data.project = projects[index]
			document.getElementById('App').__vue__.$data.selectedProjectIndex = index
			document.getElementById('App').__vue__.$data.showContent = true
		},
		closeContent: () => {
			document.getElementById('App').__vue__.$data.showContent = false
		}
	},
	mounted() {
		axios
			.get('http://localhost:8888/Intensiv/wp-json/wp/v2/project')
			.then(response => (this.projects = response.data))
			.finally(() => (this.loading = false))
			// .finally(() => (this.showContent = true));
	}
})

</script>
<style>
/* .mapnews, .moreInfo {
	display: none;
} */
.vue-list  {
	color: black;
	display: flex;
}
.vue-list ul {
	list-style-type: none;
	min-width: 200px;
}
.vue-list img {
	width: 100px;
}
.vue-list li {
	background: gray;
	margin: 3px;
}
.foreignMap {
    height: 100%;
}

/* Animations */

.contentAnimation-enter-active, .contentAnimation-leave-active {
    transition: all .7s;
}
.contentAnimation-enter, .contentAnimation-leave-to {
    transform: translateX(-80vw);
    opacity: 0;
}
</style>
<?php get_footer(); ?>