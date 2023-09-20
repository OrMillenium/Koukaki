<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            
            
				 <div class="toggle_btn ">
                     <span> </span>
                 </div> 


				 <div class="MenuFull"> 

				<img class="logoMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/image_logo_menu.png'; ?>" alt="logo menu">
				<img class="orchiMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/orchid.png'; ?>" alt=" orchid menu">
				<img class="catMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/cat.png'; ?>" alt="cat menu">
				<img class="sunFlower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/sunflower.png'; ?>" alt="sunflower  menu">
				<img class="randomMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/Random_Flower.png'; ?>" alt="random flower menu">
				<img class="flowerMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/flower.png'; ?>" alt="flower menu">
				<img class="catGrisMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/cat_Gris.png'; ?>" alt="cat gris menu">
				<img class="catJauneMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/cat_jaune.png'; ?>" alt="cat jaune menu">
				<img class="hibisMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/Hibiscus.png'; ?>" alt="hibiscus menu">
				<img class="StudioKoukaki" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/Studio_Koukaki.png'; ?>" alt="studio koukaki menu">

                     <ul>
					   <li><a href="#story">Histoire</a></li>
					   <li> <a href="#characters">Personnages</a></li>
					   <li> <a href="#place">Lieu</a></li>
					   <li> <a href="#studio">Studio Koukaki</a></li>
                     </ul>
                  </div>

              <ul>
	             <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
              </ul>
		
		</nav><!-- #site-navigation -->

		






	</header><!-- #masthead -->
