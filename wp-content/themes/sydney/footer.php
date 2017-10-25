<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>



			</div>
		</div>
	</div><!-- #content -->



	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">

			<a href="<?php echo esc_url( __( 'http://www.intersys-it.com/', 'sydney' ) ); ?>"><?php printf( __( 'Copyright © 2017 www.intersys-it.com. All Rights Reserved.', 'sydney' )); ?></a>
			<!--
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %2$s by %1$s.', 'sydney' ), 'aThemes', '<a href="http://athemes.com/theme/sydney" rel="designer">Sydney</a>' ); ?>
			-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>

<!-- //////////////////////  - jQUERY -  \\\\\\\\\\\\\\\\\\\\\\ -->

<script type="text/javascript">
// $('#wpgmza_map').css('border-radius', '0 0 0 12px');

var $uk = $(".icon-foot.uk");
	$uk.mouseover(function(e){
		e.preventDefault();
		$uk.css('opacity', '0.8');
	});

	$uk.on('mouseleave', function(e){
		$uk.css('opacity', '1');
	});
	// $uk.on('click', function(e){
	// 	e.preventDefault();
	// 	$('.maps').fadeIn();
	// 	// $('.maps').show();
	// 	$('.maps-content.uk').show();
	// 	$('.maps-content.sp').hide();
	// 	$('#wpgmza_map').css('height', '100%');
	// 	$('.middle-footer').hide();
	// 	// console.log("uk");
	// });

var $close = $('.close.maps-close');
	$close.on('click', function(e){
		$('.maps').hide();
		$('.middle-footer').show();
	});

var $sp = $(".icon-foot.sp");
	$sp.mouseover(function(e){
		e.preventDefault();
		$sp.css('opacity', '0.8');
	});

	$sp.on('mouseleave', function(e){
		$sp.css('opacity', '1');
	});

// ----------------  GET LANG? -----------------------
// var base = window.location.href; //.split('/')[2]
// // var lang = base.split('.')[0];
// var regex = /^http.?\:\/\/{w}3?\.es\//i ;
// // var regex = /^localhost\/es\//i ;
// if(base.match(regex)){
// 	var lang = "es";
// }else{
// 	var lang = "en";
// }
// // console.log("base: "+ base);
// console.log("lang: "+ lang);
// ----------------  //GET LANG? -------------------

</script>
</html>
