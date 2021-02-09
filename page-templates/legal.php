<?php
/**
 * ============== Template Name: Blank With Sub Menu
 *
 * @package silverlessstudio
 */
get_header();?>

</div><!--outer-container-->

    <div class="outer-container mb10">
        <div class="container content">
            <h1 class="heading heading__2 mb2"><?php the_field('heading');?></h1>
            <div class="contact-details sub-menu">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'sub-menu',
                    'container_class' => 'mainMenu'
                ));?>
            </div>
            <div class="form-section">

                <?php the_field('copy');?>
            </div>
        </div>
    </div>

</div><!--wrapper-->

<?php get_footer();?>
