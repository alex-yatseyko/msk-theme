<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>
<style>
footer .homeicon, .sub-menu {
   display: none;
}
.menu-footer {
   display: flex;
  list-style-type: none;
}
.menu-footer > li {
  text-indent: -5px;
}
.menu-footer > li:nth-child(1):before {
   content: ''
}
.menu-footer > li:before {
  content: "——"; 
  text-indent: -5px;
  top: -2px;
  position: relative;
  letter-spacing: -5px;
}
</style>
<footer style="background:linear-gradient(rgba(27,52,92,0.7), rgba(27,52,92, 0.7)),
url(<?php echo get_stylesheet_directory_uri() . '/images/slider_havana3.jpg'; ?>) ">
<h3>Контактная информация</h3>
<div class="footerContacts">
   <div>
	   <img src="<?php echo get_stylesheet_directory_uri() . '/images/home.png';?>" alt="">
	   <p>354065, г. Сочи, г. Сочи, ул. Красноармейская 4/1</p>
   </div>
   <div>
	   <img src="<?php echo get_stylesheet_directory_uri() . '/images/headerphone.png';?>" alt="">
	   <p>+7 (862) 296-58-00</p>
   </div>
   <div>
	   <img src="<?php echo get_stylesheet_directory_uri() . '/images/headermail.png';?>" alt="">
	   <p>info@cmc-development.ru </p>
   </div>
   <p>© 2013 - 2019, CMC Development</p>
</div>
<nav class="footerNav">
               <?php wp_nav_menu( [ 
						'menu_class' => 'menu-footer ',
						'theme_location'  => 'primary',
						'container' => 'ul'
					] ); ?>
   <!-- <a href="index.php">Главная</a>
   <p>——</p>
   <a href="aboutCompany.php?id=1">О компании</a>
   <p>——</p>
   <a href="news_cmc.php?id=6">Новости</a>
   <p>——</p>
   <a href="projects.php?id=7">Проекты</a>
   <p>——</p>
   <a href="services.php?id=8">Услуги</a>
   <p>——</p>
   <a href="Contacts.php?id=14">Контакты</a> -->
</nav>
<img class="logo" src='<?php echo get_stylesheet_directory_uri() . "/images/msk_logo_top 1.png"; ?>' alt="">
</footer>
<?php
   wp_footer();
?>
</body>
<script>
   var mobBtn = document.querySelector('.mobileHeader img:nth-child(1)');
   var header = document.querySelector('header');
   mobBtn.addEventListener('click',function(){
   header.style.transform = 'translateY(0)'
   });
</script>
</html>


