<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package industrious
 */

?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('is-preload');?>>

    <!-- Header -->
    <header id="header">
        <a class="logo" href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?></a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Nav -->

    <?php
                wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'menu',
                'menu_class'     => 'links'
                ));
                
                ?>
