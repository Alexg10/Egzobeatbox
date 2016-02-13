<?php /* Template Name: Block insta */ 


$id_page= 142;
$photo_top_left = get_field('photo_top_left', $id_page);
$photo_top = get_field('photo_top', $id_page);
$photo_top_right = get_field('photo_top_right', $id_page);
$photo_bottom_left = get_field('photo_bottom_left', $id_page);
$photo_bottom = get_field('photo_bottom', $id_page);
$photo_bottom_right = get_field('photo_bottom_right', $id_page);

?>





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



