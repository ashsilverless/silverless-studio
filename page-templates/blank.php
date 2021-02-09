<?php
/**
 * ============== Template Name: Blank Without Sub Menu
 *
 * @package silverlessstudio
 */
get_header();?>

</div><!--outer-container-->

	<div class="outer-container mb10">
		<div class="container content">
			<div class="change-form">
				<h1 class="heading heading__2 mb2"><?php the_field('heading');?></h1>
				<?php the_field('copy');?>
			</div>
		</div>
	</div>

</div><!--wrapper-->

<?php get_footer();?>
