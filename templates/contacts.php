<?php
/**
* Template Name: Контакты
*
*/
get_header();

?>
<style>
#main {
    background: linear-gradient(rgba(27,52,92,0.5), rgba(27,52,92, 0.5)), url(<?php echo get_stylesheet_directory_uri() . '/images/contacts_page_bckg.jpg'; ?>);
    background-size: cover;
    background-position: center;
}
.allContacts {
    background: url(<?php echo get_stylesheet_directory_uri() . '/images/contacts_page.png'; ?>);
    background-size: cover;
    background-position: center 10%;
    background-attachment: fixed;
}
</style>
<nav class="localNav">
	<div>
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
</nav>

<style>
	body{
		background: #fff
	}
</style>
<section class="allContacts">
	<div class="contacttext">
		<p>354065, г. Сочи, ул. Красноармейская 4/1</p>
		<p>+7 (862) 296-58-00</p>
		<p>Email: info@cmc-development.ru</p>
	</div>
	<svg width="1122" height="1085" viewBox="0 0 1122 1085" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M385.748 1015.5L377.061 809.251L374.152 792.768L368.823 775.798L363.494 758.828L335.357 688.048L278.157 574.599L249.539 515.451L271.402 513.505L294.673 513.505L340.246 515.451L380.971 515.451L431.39 513.505M418.788 492.173L237.953 492.18L179.257 365.155L124.957 235.224L82.293 114.988L73.5662 87.8386L66.7788 64.5673" stroke="url(#paint0_linear)"/>
<path d="M346.992 1016.06L338.306 809.81L335.396 793.327L324.739 759.387L296.602 688.607L239.401 575.158L199.645 493.706L176.087 447.928L154.073 444.661L140.498 441.752L123.045 436.904L109.47 433.025L101.713 428.177M34.8108 88.3977L43.5375 115.548L86.2016 235.783L140.501 365.714L166.243 423.329L157.952 423.329L139.529 420.42L106.561 407.815" stroke="url(#paint1_linear)"/>
<path d="M427.734 1015.78L437.196 906.209L448.831 844.152L471.131 777.248L502.162 713.251L559.371 617.257L619.488 516.415L643.729 475.69L691.241 394.241L763.964 269.157L816.325 152.801" stroke="white"/>
<path d="M636.554 1016.77L667.983 899.422L700.95 836.396L740.704 752.038L773.675 689.012L818.278 597.866L862.882 506.72L879.365 472.783L914.272 404.908L969.542 292.43L939.483 279.823" stroke="white"/>
<path d="M660.412 1017.41L687.34 916.874L687.47 916.39L735.86 944.024M1035.48 481.507L927.847 426.238L903.223 473.429L886.739 507.366L842.136 598.512L797.533 689.658L764.562 752.684L724.807 837.042L691.841 900.068L690.343 905.664L690.14 906.421L735.86 933.358" stroke="white"/>
<path d="M453.847 1015.78L463.309 906.206L474.944 844.15L497.243 777.245L530.306 714.219L587.514 618.225L646.662 516.413L671.873 475.688L720.355 395.208L764.958 314.568L819.258 348.665M825.075 337.999L770.776 304.062L790.077 269.155L812.973 218.275L939.493 279.821M975.369 273.033L944.341 257.519L939.493 254.61L935.614 254.61L931.736 254.61L872.588 227.46L863.861 223.582L858.043 223.582L852.75 225.31L817.351 208.546" stroke="white"/>
<rect x="584.779" y="711.995" width="53.7123" height="119.235" transform="rotate(30 584.779 711.995)" stroke="white"/>
<rect x="570.253" y="903.726" width="58.0419" height="62.3414" transform="rotate(15.6088 570.253 903.726)" stroke="white"/>
<path d="M671.337 810.439L671.338 810.438L675.216 802.681L675.216 802.681L675.222 802.669L682.01 788.124L682.201 787.714L681.811 787.483L656.048 772.215L673.039 741.065L728.611 769.117L671.779 880.455L643.43 865.984L671.337 810.439Z" stroke="white"/>
<rect x="612.492" y="657.442" width="39.0952" height="38.913" transform="rotate(30 612.492 657.442)" stroke="white"/>
<rect x="694.943" y="503.868" width="85.0613" height="165.035" transform="rotate(30 694.943 503.868)" stroke="white"/>
<rect x="785.285" y="348.946" width="85.0613" height="178.938" transform="rotate(30 785.285 348.946)" stroke="white"/>
<path d="M816.044 318.354L842.765 262.047L887.422 281.049L861.245 337.769L816.044 318.354Z" stroke="white"/>
<path d="M1045.69 475.578L935.603 416.542L1002.51 270.127" stroke="white"/>
<path d="M389.548 559.791L422.238 612.672L422.378 612.899L422.644 612.909L473.066 614.848L473.334 614.858L473.491 614.64L495.492 584.031L523.805 605.738L492.213 654.562L393.871 650.706L355.45 583.47L389.548 559.791Z" stroke="white"/>
<path d="M571.651 417.877L586.087 431.351L593.749 461.997L575.502 485.045L536.889 520.762H510.181L493.961 499.772L498.78 413.019L527.561 402.466L527.743 402.399L527.833 402.227L557.891 344.049L557.891 344.048L582.961 295.837H617.565H681.061V325.289L668.508 353.29L650.239 385.983H633.079H632.7L632.597 386.348L625.9 410.269L571.93 417.015L570.869 417.148L571.651 417.877Z" stroke="white"/>
<path d="M690.564 205.315L690.564 205.322L690.565 205.329L692.5 224.606L692.5 247.685L680.981 295.5L646.5 295.5L610.165 295.5L609.218 274.745L609.204 274.425L608.907 274.304L561.587 255.062L538.531 218.695L547.183 177.513L580.9 136.245L608.736 130.507L636.711 134.351L660.761 141.06L672.282 153.495L682.873 165.964L687.669 179.345L689.596 191.824L690.564 205.315Z" stroke="white"/>
<path d="M711.814 137.805L689.026 126.401L724.877 58.4287L789.085 88.7926L752.21 166.769L708.408 144.829L712.024 138.5L712.286 138.041L711.814 137.805Z" stroke="white"/>
<rect x="941.593" y="475.392" width="57.1782" height="366.956" transform="rotate(26.8611 941.593 475.392)" stroke="white"/>
<g opacity="0.9" clip-path="url(#clip0)">
<path d="M774.77 363.923C752.619 363.923 734.598 381.944 734.598 404.095C734.598 431.585 770.548 471.941 772.078 473.646C773.516 475.247 776.026 475.244 777.461 473.646C778.992 471.941 814.942 431.585 814.942 404.095C814.941 381.944 796.921 363.923 774.77 363.923ZM774.77 424.306C763.625 424.306 754.558 415.239 754.558 404.095C754.558 392.95 763.625 383.883 774.77 383.883C785.914 383.883 794.981 392.95 794.981 404.095C794.981 415.24 785.914 424.306 774.77 424.306Z" fill="white"/>
</g>
<defs>
<linearGradient id="paint0_linear" x1="390.846" y1="916.384" x2="170.615" y2="321.923" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="0.729442" stop-color="white"/>
<stop offset="1" stop-color="white" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint1_linear" x1="346.154" y1="895.923" x2="150.692" y2="385.461" gradientUnits="userSpaceOnUse">
<stop stop-color="white"/>
<stop offset="0.485239" stop-color="white"/>
<stop offset="1" stop-color="white" stop-opacity="0"/>
</linearGradient>
<clipPath id="clip0">
<rect width="110.923" height="110.923" fill="white" transform="translate(719.309 363.923)"/>
</clipPath>
</defs>
</svg>
<input type="checkbox" class="checkmaptriger">
<div class="maptriger" style="
	background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/maptrgier.png' ;?>);
">
</div>
<div class="mapFrame">
	<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaa56d18adde172e5fcb81220db0411ac2c5f38b3c85cbd86d8b83a48f4678cf2&amp;source=constructor"width="100%"height="100%" frameborder="0"></iframe>
</div>
</section>

<?php get_footer(); ?>