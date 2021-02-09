<?php
/**
 * Single Posts (News)
 *
 * @package silverlessstudio
 */
get_header();?>

</div><!--outer-container-->
<?php $heroBackground = get_field('banner_image');?>

    <div class="outer-container hero">
        <div class="container">
            <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
                <?php if(get_field('add_background_overlay')) {?>
                    <div class="background-overlay" style="background:<?php the_field('background_colour');?>; opacity: 0.<?php the_field('background_opacity');?>;"></div>
                <?php }?>
                
                
                <div class="container">
                    <h1 class="heading heading__1"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="breadcrumb">
                <p><a href="/news">NEWS</a><span><?php the_title(); ?></span></p>
            </div>
        </div>
    </div>

    <div class="outer-container mb10">
        <div class="container content">
            <div class="toggle-list inspired">
				<div class="sticky">
					<h3 class="heading heading__7">
                        <?php if (get_field('sidebar_heading')) {
                            the_field('sidebar_heading');
                        } else {
                            echo 'INSPIRED BY THIS PROJECT?';
                        }?></h3>
					<p>
                        <?php if (get_field('sidebar_text')) {
                        the_field('sidebar_text');
                    } else {
                        echo 'Then get in contact with us to chat about working together on a similar project for your business.';
                    }?>
                    </p>
					<a href="/contact" class="button button__ghost">Contact Us</a>
				</div>
            </div>
            <div class="text-content">
				<p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
				<h2 class="heading heading__4"><?php the_field('sub_headline');?></h2>
                    <div class="copy">
                        <?php if ( have_posts() ) {
    						while ( have_posts() ) {
    							the_post();
    							the_content();
    						}
    					}
    					?>
                    </div>


            </div>
            <?php get_template_part('template-parts/flexible-gallery');?>
        </div>
    </div>

    <div class="container-overflow-right mb10">
    	<div class="content-wrapper light-wrapper">
			<div class="other-news">
				<div class="container">
					<h3 class="heading heading__3">Other News</h3>
					<?php $currentID = get_the_ID();
                    $silverlessPosts = new WP_Query(array(
						'post_type'=>'post',
						'post_status'=>'publish',
						'posts_per_page'=>3,
                        'post__not_in' => array($currentID)
					));
					if ( $silverlessPosts->have_posts() ) :
					while ( $silverlessPosts->have_posts() ) :
					$silverlessPosts->the_post();
					$postThumbImage = get_field('thumbnail_image'); ?>
					<div class="news-feed__item">
						<div class="image" style="background:url(<?php echo $postThumbImage['url'];?>);"><a href="<?php the_permalink(); ?>"></a></div>
						<p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
						<h3 class="heading heading__7"><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="button button__bare button__bare--brand">Read More</a>
					</div>
					<?php endwhile; wp_reset_postdata();endif; ?>
				</div>
			</div>
        </div>
    </div>
</div><!--wrapper-->

<?php get_footer();?>
