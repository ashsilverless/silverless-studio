<?php
/**
 * ============== Template Name: News
 *
 * @package silverlessstudio
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right hero content">
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

<div class="outer-container mb5 scroll-target">
    <div class="container content news-feed">
        <?php $silverlessPosts = new WP_Query(array(
    				'post_type'=>'post',
    				'post_status'=>'publish',
    				'posts_per_page'=>-1
    			));
    			if ( $silverlessPosts->have_posts() ) :
    			while ( $silverlessPosts->have_posts() ) :
    			$silverlessPosts->the_post();
    			$postThumbImage = get_field('thumbnail_image'); ?>
        <div class="news-feed__item news-summary__item">
            <div class="image" style="background:url(<?php echo $postThumbImage['url'];?>);"><a
                    href="<?php the_permalink(); ?>"></a></div>
            <p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
            <h3 class="heading heading__7"><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="button button__bare button__bare--brand">Read More</a>
        </div>
        <?php endwhile; wp_reset_postdata();endif; ?>
    </div>
</div>

<div class="outer-container">
    <?php $ctaBackground = get_field('cta_background_image');?>
    <div class="container content cta" style="background:url(<?php echo $ctaBackground['url'];?>);">
        <div class="content">
            <h3 class="heading heading__4"><?php the_field('cta_heading');?></h3>
            <a href="<?php the_field('cta_button_target');?>"
                class="button button__bare"><?php the_field('cta_button_text');?></a>
        </div>
    </div>
</div>

</div>
<!--wrapper-->

<?php get_footer();?>