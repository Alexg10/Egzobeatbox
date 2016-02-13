<?php /* Template Name: Home Page */ ?>


<?php get_header(); ?>

	<header>
		<div style="background-image:url(<?php the_field('img_home'); ?>); ">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/sublogo.png" alt="logo">
			</div>	
		</div>	
	</header>

	<main>
	<div class="container">
		<div class="video_description">
			<iframe type="text/html" 
			    width="100%" 
			    height="600"
			    src="<?php the_field('video_link'); ?>"
			    frameborder="0">
			</iframe>			
		</div>
		<div class="description">
			
			<?php
			if( have_rows('description') ):
			    while ( have_rows('description') ) : the_row();
					$image_description = get_sub_field('description_img');
					$texture = get_sub_field('texture');?>
					<div class="description_step">
						<div class="description_box" style="background-image:url(<?php echo $texture['url'] ?>)">
							<h3 class="description_title inside_description"><?php the_sub_field('description_title'); ?></h3> 
							<div class="description_quote inside_description">
								<p><?php the_sub_field('description_quote'); ?></p> 
							</div>
							<p class="description_description inside_description"><?php the_sub_field('description_description'); ?></p>
						</div>
						<div class="description_illustration" style="background-image:url(<?php echo $image_description['sizes']['description_custom']; ?>">					  
						</div>							
					</div>     
				<?php
			    endwhile;
			else :
			endif;
			?>
		</div>

		<?php  if (!empty( the_field('video_link_2'))): ?>
		<div class="video_description">
			<iframe type="text/html" 
			    width="100%" 
			    height="600"
			    src="<?php the_field('video_link_2'); ?>"
			    frameborder="0">
			</iframe>			
		</div>
		<?php endif; ?>

		<?php get_template_part( 'block_insta' ); ?>
		
	</div>



	</main>

<?php get_footer(); ?>
