<?php /* Template Name: Boxes */ 

$id_page=142;

$photo_top_left = get_field('photo_top_left',$id_page);
$photo_top = get_field('photo_top',$id_page);
$photo_top_right = get_field('photo_top_right',$id_page);
$photo_bottom_left = get_field('photo_bottom_left',$id_page);
$photo_bottom = get_field('photo_bottom',$id_page);
$photo_bottom_right = get_field('photo_bottom_right',$id_page);

$image = get_field('cover_display');
?>


<?php get_header(); ?>

<header  class="landing_pict">
	<div class="single_header <?php if( is_page('beats')): echo beats; endif; ?>" style="background-image:url(<?php the_field('photo_top'); ?>);">
			<div class="container">
		<div class="boxes_intro">
			<h2><?php echo  get_field('title_top'); ?></h2>
			<h3><?php echo  get_field('description_photo'); ?></h3>
		</div>
	</div>
	</div>

</header>

<div class="container">
<?php if (get_field('playlist_link') != "") { ?>
	<div class="beats_container">
		<div class="display_beats">
			<img src="<?php echo $image; ?>">
		</div>
		<div class="playlist">
			<?php echo  get_field('playlist_link'); ?>
			
		</div>
		
	</div>
<?php } ?>

	<div class="serie_container">
		<?php
		$i = 0;
		if( have_rows('serie') ):
		    while ( have_rows('serie') ) : the_row();
		    	$presentation_serie = get_sub_field('presentation_serie');
		    	$galleries = get_sub_field('gallery');
		    	$color=get_sub_field('color');  ?>
		    	<div class="box box_<?php echo $i ?>">
    				<div class="box_presentation">
    					<div class="filter"></div>
    					<div class="box_infos">
    						<p>Collection</p>
    						<h3 class="box_title">xo[<span><?php the_sub_field('serie_name');?></span>]box</h3>	
    							<p><?php echo get_sub_field('type_serie') ?></p>
    					</div>
    					
    					<img src="<?php echo $presentation_serie['sizes']['serie_presentation']; ?>" class="">
    				</div>
    		        <div class="box_presentation_slider">
    		        	<div class="mobile_bg">
    		        		<i class="icon-close icon-close-mobile_bg"></i>
    		        	</div>
    	    			<div class="slider_box">		
    	    		        <?php    	  
    	    		        if( have_rows('gallery') ):
    	    		            while ( have_rows('gallery') ) : the_row();
    	    		            $img_box = get_sub_field('img_box');
    	    		            $motif = get_sub_field('motif'); ?>
								<div class="box_motif">
    	    						<img src="<?php echo $img_box['sizes']['serie_slide']; ?>" class="mobile_hide" />
    	    						<img src="<?php echo $img_box['sizes']['serie_slide_mobile']; ?>" class="mobile_visible" />
									<img src="<?php echo $motif['sizes']['serie_slide']; ?>" class="motif_box"/>
								</div>
    	    		           <?php endwhile;
    	    		        endif;
    	    		        ?>
    	    	        </div>
    		        </div>		    		
		    	</div>	
		    	<span class="picture_sup_int"><?php echo $i ?></span>
	    	<?php 
	        $i++;
	        endwhile;		
		endif;
		?>		
	</div>
	<div class="slider_display"></div>
</div>

<div class="insta_block">
	<div class="insta_top">
		<a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank">
			<img src="<?php echo $photo_top_left['sizes']['insta_square']; ?>" class="photo_top_left">
			<img src="<?php echo $photo_top['sizes']['insta_top']; ?>" class="insta_top_img photo_top">
			<img src="<?php echo $photo_top_right['sizes']['insta_square']; ?>" class="photo_top_right">
		</a>		
	</div>
	<div class="insta_middle">
		<div class="insta_block_container">
			<h2><?php the_field('accroche', $id_page);?></h2>
			<div class="scx_link">
				<a href="<?php echo the_field('facebook_link', 'option'); ?>" target="_blank"><i class="icon-facebook"></i></a>
				<a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank"><i class="icon-instagram"></i></a>
				<a href="<?php echo the_field('twitter_link', 'option'); ?>" target="_blank"><i class="icon-twitter"></i></a>
				<a href="<?php echo the_field('soundcloud_link', 'option'); ?>" target="_blank"><i class="icon-soundcloud2"></i></a>
			</div>
		</div>
		
	</div>
	<div class="insta_bottom">
		<a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank">
			<img src="<?php echo $photo_bottom_left['sizes']['insta_square']; ?>" class="photo_bottom_left">
			<img src="<?php echo $photo_bottom['sizes']['insta_large']; ?>" class="photo_bottom">
			<img src="<?php echo $photo_bottom_right['sizes']['insta_large']; ?>" class="photo_bottom_right">
		</a>
	</div>
</div>
<?php get_footer(); ?>
