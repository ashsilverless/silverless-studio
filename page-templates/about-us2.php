<?php
/**
 * ============== Template Name: About Us Do Not Use
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
        <div class="toggle-list">
            <div class="sticky">
                <?php if( have_rows('services_toggle') ):
        			while( have_rows('services_toggle') ): the_row();?>
                <div class="toggle-list__item">
                    <div class="trigger"></div>
                    <div class="heading heading__4">
                        <a href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('heading');?></a>
                    </div>
                    <div class="target">
                        <?php the_sub_field('content');?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>

        </div>
        <div class="content">
            <h3 class="heading heading__2"><?php the_field('heading');?></h3>
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/arrow");?>
        </div>
    </div>
</div>

<div class="outer-container mb10 scroll-target services">
    <div class="container content">
        <div class="toggle-list">
            <div class="sticky">
                <?php if( have_rows('services_toggle') ):
        			while( have_rows('services_toggle') ): the_row();?>
                <div class="toggle-list__item">
                    <div class="trigger"></div>
                    <div class="heading heading__4">
                        <a href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('heading');?></a>
                    </div>
                    <div class="target">
                        <?php the_sub_field('content');?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>

        </div>
        <div class="text-content">
            <?php if( have_rows('page_copy') ):
    			while( have_rows('page_copy') ): the_row();?>
            <h3 class="heading heading__3 trigger"><?php the_sub_field('heading');?></h3>
            <p class="sub-heading"><?php the_sub_field('sub_heading');?></p>
            <div class="strong-lead-para"><?php the_sub_field('copy');?></div>
            <?php endwhile; endif;?>
        </div>
    </div>
</div>

<div class="container-overflow-right mb10">
    <div class="content-wrapper light-wrapper">
        <div class="container team">
            <?php if( have_rows('team_section') ):
    			while( have_rows('team_section') ): the_row();?>
            <div class="lead-copy">
                <h3 class="heading heading__3"><?php the_sub_field('headline');?></h3>
                <p><?php the_sub_field('copy');?></p>
            </div>
            <div class="members">
                <div class="container">
                    <?php if( have_rows('team_members') ):
                        while( have_rows('team_members') ): the_row();
                        $teamImage = get_sub_field('image');?>
                    <div class="team-member">
                        <div class="image" style="background:url(<?php echo $teamImage['url'];?>);"></div>
                        <h4 class="heading heading__4"><?php the_sub_field('name');?></h4>
                        <h5 class="heading heading__6"><?php the_sub_field('position');?></h5>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</div>
</div>
<!--wrapper-->

<?php get_footer();?>