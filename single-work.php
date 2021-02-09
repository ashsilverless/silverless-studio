<?php
/**
 * Work Item
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
                <p><a href="/work">Work</a><span><?php the_title(); ?></span></p>
            </div>
        </div>
    </div>

    <div class="outer-container mb10">
        <div class="container content">
            <div class="toggle-list work-detail">
				<div class="sticky">
					<h3 class="heading heading__7"><?php the_title(); ?></h3>
					<?php the_field('copy'); ?>
                    <div class="types">
                        <?php $terms = get_the_terms( $post->ID, 'type' );
                        if ($terms) {
                            foreach($terms as $term) {?>
                                <h2 class="heading heading__6"><?php echo $term->name;?></h2>
                            <?php }
                        }?>
                    </div>
                    <div class="toggle-list inspired">
                        <div class="sticky">
                            <h3 class="heading heading__7">INSPIRED BY THIS PROJECT?</h3>
                            <p>Then get in contact with us to chat about working together on a similar project for your business.</p>
                            <a href="" class="button button__ghost">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('template-parts/flexible-gallery');?>
            <?php if (get_field('quote')):?>
            <div class="quote">
                <?php get_template_part("inc/img/quote"); ?>
                <p class="copy"><?php the_field('quote');?></p>
                <p class="attrib"><?php the_field('quote_attrib');?></p>
            </div>
        <?php endif;?>
        </div>
    </div>

    <div class="container-overflow-right mb10">
    	<div class="content-wrapper light-wrapper">
			<div class="work-leaders">
				<div class="container">
					<h3 class="heading heading__3">Other Projects</h3>
                    <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'work',
                            'posts_per_page' => -1,
                            'post__not_in' => array($currentID),
                        )
                    );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $leaderImage = get_field('thumbnail_image', $post->ID);
                    $text = get_field('copy', $post->ID);
                    if ( '' != $text ) {
                        $text = strip_shortcodes( $text );
                        $text = apply_filters('the_content', $text);
                        $text = str_replace(']]>', ']]>', $text);
                        $excerpt_length = 22; // 20 words
                        $excerpt_more = apply_filters('excerpt_more', '' . '...');
                        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
                    }?>

                    <div class="content">
						<h3 class="heading heading__7"><?php the_title(); ?></h4>
						 <p><?php echo $text; ?></p>
					    <a href="<?php the_permalink(); ?>" class="button button__bare button__bare--brand" alt="silverless studio | <?php the_title(); ?>">Read More</a>
					</div>
                    
                    <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);">
                        <a href="<?php the_permalink(); ?>"></a>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
				</div>
			</div>
        </div>
    </div>
</div><!--wrapper-->

<?php get_footer();?>
