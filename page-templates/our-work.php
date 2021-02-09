<?php
/**
 * ============== Template Name: Our Work
 *
 * @package silverlessstudio
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right hero">
    <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
    </div>
    <div class="container">
        <div class="content">
            <h1 class="heading heading__2"><?php the_field('heading');?></h1>
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/arrow");?>
        </div>
    </div>
</div>

<div class="outer-container leaders scroll-target">
    <?php if( have_rows('leader_section') ):
			while( have_rows('leader_section') ): the_row();
            $leaderBackground = get_sub_field('background_image');?>
    <div class="container content">
        <div class="copy">
            <h2 class="heading heading__4"><?php the_sub_field('heading');?></h2>
            <p><?php the_sub_field('copy');?></p>
            <a href="<?php the_sub_field('button_target');?>"
                class="button button__bare button__bare--brand"><?php the_sub_field('button_text');?></a>
        </div>
        <div class="image" style="background:url(<?php echo $leaderBackground['url'];?>);">
            <a href="<?php the_sub_field('button_target');?>"></a>
        </div>
    </div>
    <!--container-->
    <?php endwhile; endif;?>
</div>

<div class="outer-container">
    <?php $ctaBackground = get_field('cta_background_image');?>
    <div class="container content cta" style="background:url(<?php echo $ctaBackground['url'];?>);">
        <div class="content">
            <h2 class="heading heading__4"><?php the_field('cta_heading');?></h2>
            <a href="<?php the_field('cta_button_target');?>"
                class="button button__bare"><?php the_field('cta_button_text');?></a>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/_testimonial-section');?>

</div>
<!--wrapper-->

<?php get_footer();?>