<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Egzotheme
 */

?>

	</div><!-- #content -->
	<?php get_template_part( 'block_prefooter' ); ?>
	<footer class="footer">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/logo_footer_white.png"  class="logo_footer" alt="Egzobeatbox logo">
		<div class="scx_link">
			<a href="<?php echo the_field('facebook_link', 'option'); ?>" target="_blank"><i class="icon-facebook"></i></a>
			<a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank"><i class="icon-instagram"></i></a>
			<a href="<?php echo the_field('twitter_link', 'option'); ?>" target="_blank"><i class="icon-twitter"></i></a>
			<a href="<?php echo the_field('soundcloud_link', 'option'); ?>" target="_blank"><i class="icon-soundcloud2"></i></a>

		</div>

		<p>2015 - Copyright</p>


<!-- 		<div class="contact_column">
			<h3 class="column_title">Contact -</h3>
			<p>Tel : <?php the_field('phone_number', 'option'); ?></p>
			<p><?php the_field('mail', 'option'); ?></p> 
		</div>
		<div class="adress_column">
			<h3 class="column_title">Adresse -</h3>
			<p><?php the_field('adresse', 'option'); ?></p> 
			<p><?php the_field('complement_adresse', 'option'); ?></p> 
			
		</div>
		<div class="copyright_column">
			<p>2015 - Copyright</p>
		</div> -->
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/anim.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
