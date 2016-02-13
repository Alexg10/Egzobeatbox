<?php /* Template Name: Single Box */ ?>


<?php get_header(); 
$qr = get_field('qr_code');
$texture = get_field('texture');
$column = get_field('column');
?>

	<header style="background-image:url(<?php the_field('photo_top'); ?>); " class="landing_pict"></header>



	<main>
		<!-- //SOUNDCLOUD -->	
		<?php if (get_field('soundcloud_url')!='') :
			echo get_field('soundcloud_url');
			endif;?>

		<div class="box_description">
			<div class="container">
				<div class="qr_box">
					<img src="<?php echo $qr['sizes']['qr_size']; ?>" alt=""> 						  
				</div>
				<div class="box_infos">
					<h2>xo[<span style="color:#<?php echo get_field('color'); ?>;"><?php echo get_field('box_name'); ?></span>]box</h2>
					<p><?php echo get_field('description_box'); ?></p>
				</div>	
				
			</div>
	
		</div>
		<div class="more_content" style="background-image:url(<?php echo $texture['sizes']['large']; ?>)">
			<div class="container">
				<?php 
				if( !empty(get_field('punchline')) ): ?>
					<div class="punchline">
						<div class="punchline_quote"></div>
						<h3><?php echo get_field('punchline');?></h3>
						<div class="punchline_quote"></div>
					</div>
				<?php endif; ?>

				<div class="description_sup <?php if ($column == true): ?> description_column <?php endif; ?>"><?php echo get_field('description_sup')?></div>
				<div class="picture_sup">
				<?php 

				$images = get_field('photos_sup');
				$i = 0;
				if( $images ): ?>
				    <ul>
				        <?php foreach( $images as $image ): ?>
				            <li class= "picture_sup_int_<?php echo $i ?> picture_suplus">
				                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				            </li>
				        <?php 
				        $i++; ?>
				        <span class="picture_sup_int"><?php echo $i ?></span>
						<?php
				        endforeach; ?>
				    </ul>
				<?php endif; ?>
					
				</div>
			</div>
				
			</div>

		<div class="description">
			
			<?php
			if( have_rows('description') ):
			    while ( have_rows('description') ) : the_row();
					$image_description = get_sub_field('descriptio@n_img');
					$texture = get_sub_field('texture');?>
					<div class="description_step">
						<div class="description_box" style="background-image:url(<?php echo $texture['url'] ?>)">
							<h3 class="description_title"><?php the_sub_field('description_title'); ?></h3> 
							<div class="description_quote">
								<p><?php the_sub_field('description_quote'); ?></p> 
							</div>
							<p class="description_description"><?php the_sub_field('description_description'); ?></p>
						</div>
						<div class="description_illustration">
				        	<img src="<?php echo $image_description['sizes']['custom-size']; ?>" alt=""> 						  
						</div>							
					</div>     
				<?php
			    endwhile;
			else :
			endif;
			?>
		</div>

<!-- 		<div class="video_description container">
			<iframe type="text/html" 
			    width="100%" 

			    src="https://player.vimeo.com/video/130620011"
			    frameborder="0">
			</iframe>			
		</div>
 -->	</main>

<?php get_footer(); ?>
