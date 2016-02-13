<?php /* Template Name: Block prefooter */ 

$photo_top_left = get_field('photo_top_left',119);
$id_page= 119;
$prefooter_bg = get_field('prefooter_bg', $id_page);
?>



<div class="pre_footer">
	<div class="container pre_footer_display">
		<?php if( have_rows('box', $id_page) ): ?>
			<?php while( have_rows('box', $id_page) ): the_row(); 

				// vars
				$template = get_sub_field('template', $id_page);
				$color = get_sub_field('color', $id_page);
				$img_statique = get_sub_field('img_statique', $id_page);
				$gif = get_sub_field('gif', $id_page);
				$link = get_sub_field('link', $id_page);

				?>

				<div class="box_container" style="background-image:url(<?php echo $template['sizes']['large']; ?>)">
					<a href="<?php echo get_sub_field('box_link', $id_page); ?>">
						<div class="color_filter" style="background-color:<?php echo $color ?>"></div>
						<img src="<?php echo $img_statique['sizes']['large']; ?>" class="img_static">
						<img src="<?php echo $gif['sizes']['large']; ?>" class="img_animated">
					</a>

					
				</div>
					

			<?php endwhile; ?>
		<?php endif; ?>
	</div>


	<div class="prefooter_bg" style="background-image:url(<?php echo $prefooter_bg['sizes']['large']; ?>)">
	</div>
	
</div>








