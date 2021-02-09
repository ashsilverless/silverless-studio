<?php /** Header @package silverlessstudio */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content=">Silverless - <?php wp_title(''); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
	$site_description = get_bloginfo( 'description', 'display' );
	$site_name = get_bloginfo( 'name' );
	if(is_front_page() || is_home()){
		echo $site_name;echo ' | '; echo  $site_description; 
	} else{
		the_title(); echo ' | '; echo $site_name;
	}?>
    </title>
    <link rel="stylesheet" href="https://use.typekit.net/ibi2glu.css">
    <!--TYPEKIT INJECT-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89086250-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-89086250-2');
    </script>

</head>

<body <?php body_class(); ?>>
    <div class="cta-contact-header">
        <div class="wrapper">
            <div class="outer-container">
                <div class="container">
                    <div class="col">
                        <a href="/contact" class="button button__global">
                            <i class="fas fa-phone"></i>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-offscreen">
        <div class="wrapper">
            <div class="outer-container">
                <div class="container">
                    <span class="accent"></span>
                    <div class="col">
                        <?php wp_nav_menu(array(
						'theme_location'  => 'main-menu',
						'container_class' => 'mainMenu'
					));?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main>
        <!--main closes in footer-->

        <div class="wrapper">

            <div class="outer-container mobile-nav">
                <div class='sidebar'>
                    <div class="nav-trigger">
                        <div class="hamburger-menu"></div>
                    </div>
                    <div class="quick-links">
                        <a href="/contact" class="icon">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="mailto:hello@silverless.co.uk" class="icon">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <?php get_template_part("template-parts/social");?>
                    </div>
                </div>
                <div class="container content">
                    <a href="<?php echo get_home_url(); ?>"
                        alt="Silverless is a Wiltshire-based web design and development studio. We build bespoke websites and portals for clients across many sectors."
                        title="Web design and development studio, Marlborough">
                        <?php get_template_part("template-parts/logo"); ?>
                    </a>
                </div>
            </div>



            <div class="outer-container">
                <div class='sidebar'>
                    <div class=sidebar__top>
                        <a href="<?php echo get_home_url(); ?>"
                            alt="Silverless is a Wiltshire-based web design and development studio. We build bespoke websites and portals for clients across many sectors."
                            title="Web design and development studio, Marlborough">
                            <?php get_template_part("template-parts/logo"); ?>
                        </a>
                        <div class="nav-trigger">
                            <div class="hamburger-menu"></div>
                            <span>Menu</span>
                        </div>
                    </div>
                    <div class="sidebar__bottom">
                        <div class="slide-nav">
                            <?php if( have_rows('top_carousel') ):
						$i = 1;
						while( have_rows('top_carousel') ): the_row();?>
                            <div id="slide<?php echo $i;?>" class="slide-nav__item" ref-slide="<?php echo $i;?>">0
                                <?php echo $i;?>.</div>

                            <?php $i++; endwhile; endif;?>

                        </div>
                    </div>
                </div>