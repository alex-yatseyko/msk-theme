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

<div class="vue-list">

	<?php 
		$category = get_category( get_query_var( 'cat' ) );
		$cat_id = $category->cat_ID;
		// echo $cat_id;

		// http://localhost:8888/Intensiv/wp-json/wp/v2/categories/26

		// http://localhost:8888/Intensiv/wp-json/wp/v2/project?filter[cat]=26
	?>

	<!-- <div v-if="loading">Loading...</div> -->

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
						<div class="projectInfo_img" 
							:style="{ 
								background: `url(${p.acf.cover.url})`, 
								backgroundSize: 'cover' 
							}"></div>
						<div class="liltext">
							<h5>{{ p.title.rendered }}</h5>
							<hr>
							<span>{{ p.acf.city }}</span>
						</div>
					</div>
		</div>
	  </div>


	<transition name="contentAnimation">
		<div class="moreInfo" v-if="showContent">
			<img :src="project.acf.logo_zakazchika.url" 
				:alt="project.title.rendered">
			<section class="newitem">
				<div class="content">
					<div class="liltext">
						<h5>{{ project.acf.nazvanie_zakazchika }}</h5>
						<hr>
						<span>{{ project.date }}</span>
					</div>
					<p class="newText">{{ project.acf.nazvanie_zakazchika }}</p>

					<div class="photos">
					<div class="photo">
						<img :src="img" alt="">
						<div class="goL" @click="onDecreseSlide(selectedImgIndex)"><div></div></div>
						<div class="goR" @click="onAddSlide(selectedImgIndex)"><div></div></div>
					</div>
					</div>
					
					<div class="toggle-controls">
					<button v-for="(img, imgIndex) of project.acf.foto_dlya_slajdera" @click="changeSlide(imgIndex)">
						<img 
							:src="project.acf.foto_dlya_slajdera[imgIndex].url" 
							:alt="project.title.rendered"
						/> 
					</button>
					</div>
					<p class="extraText">{{ project.content.rendered.slice(3).slice(0, -5) }}</p>
				</div>
			</section>
		</div>
	</transition>
	
	<iframe id="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aeaacb8c62ece6ddc054f374dd1efd776192650fe1cdd2cff89fac8c3021bddae&amp;source=constructor" width="100%" height="683" frameborder="0"></iframe>
		<transition name="cross">
			<div v-if="showContent" @click="closeContent" class="cross">
		</transition>
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
		selectedProjectIndex: 999,
		img: '',
		selectedImgIndex: 0
	},
	methods: {
		selectProject: (index, projects) => {
			document.getElementById('App').__vue__.$data.showContent = false
			document.getElementById('App').__vue__.$data.project = projects[index]
			document.getElementById('App').__vue__.$data.selectedProjectIndex = index
			document.getElementById('App').__vue__.$data.selectedImgIndex = 0
			document.getElementById('App').__vue__.$data.img = document.getElementById('App').__vue__.$data.project.acf.foto_dlya_slajdera[document.getElementById('App').__vue__.$data.selectedImgIndex].url
		},
		closeContent: () => {
			document.getElementById('App').__vue__.$data.showContent = false
		},
		changeSlide: (index) => {
			document.getElementById('App').__vue__.$data.selectedImgIndex = index
			// console.log(document.getElementById('App').__vue__.$data.project.acf.foto_dlya_slajdera[index].url)
			document.getElementById('App').__vue__.$data.img = document.getElementById('App').__vue__.$data.project.acf.foto_dlya_slajdera[index].url
		},
		onAddSlide: (index) => {
			const newIndex = index + 2
			if(newIndex > document.getElementById('App').__vue__.$data.project.acf.foto_dlya_slajdera.length) {
				console.log('all')
				return ''
			} else {
				document.getElementById('App').__vue__.$data.selectedImgIndex = index + 1
				document.getElementById('App').__vue__.$data.img = document.getElementById('App').__vue__.$data.project.acf.foto_dlya_slajdera[document.getElementById('App').__vue__.$data.selectedImgIndex].url
			}
		},
		onDecreseSlide: (index) => {
			console.log(index)
			if((index - 1) < 0) {
				console.log('start')
				console.log(index)
				return ''
			} else {
				document.getElementById('App').__vue__.$data.selectedImgIndex = index - 1
				document.getElementById('App').__vue__.$data.img = document.getElementById('App').__vue__.$data.project.acf.foto_dlya_slajdera[document.getElementById('App').__vue__.$data.selectedImgIndex].url
				console.log(index)
			}
		},
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
.newText {
    min-height: 85px;
}
.mapNewsContent .active {
	background: #eee;
}
/* .foreignMap {
    height: 100%;
} */

/* Animations */

.contentAnimation-enter-active, .contentAnimation-leave-active {
    transition: all .7s;
}
.contentAnimation-enter, .contentAnimation-leave-to {
    transform: translateX(-80vw);
    opacity: 0;
}

.cross-enter-active, .cross-leave-active {
    transition: all .7s;
}
.cross-enter, .cross-leave-to {
    transform: translateX(10vw);
    opacity: 0;
}

</style>
<?php get_footer(); ?>