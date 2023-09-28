<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_doranger_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <div class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></div>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

          <ul class="burger-menu center-links menu-open">
                <img class="floating-logo2" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
                <div class="orchid_position" id="orchid"></div>
                <div class="sunflower_position" id="sunflower"></div>
                <div class="cat_position" id="cat"></div>
                <div class="flower_position" id="flower"></div>
                <div class="random_flower_position" id="random_flower"></div>
                <div class="cat2_position" id="cat2"></div>
                <div class="cat3_position" id="cat3"></div>
                <div class="hibiscus_footer_position" id="hibiscus_footer"></div>
                <div class="position_menu">
                <li><a href="#story" class="hover-effect">Histoire</a></li>
                <li><a href="#characters" class="hover-effect">Personnages</a></li>
                <li><a href="#place" class="hover-effect">Lieu</a></li>
                <li><a href="#studio" class="hover-effect">Studio Koukaki</a></li>
                <p class="center">STUDIO KOUKAKI</p>
                </div>
          </ul>

            </nav>
        </header>

       
