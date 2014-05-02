<?php
/**
 * This is the Header template for the Three Stirrups base theme
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php get_bloginfo( 'pingback_url' ) ?>" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div class="site-container">
    <header class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <div class="wrap">
            <div id="title-area">
            <?php if(is_front_page()) :?>
                <h1 class="site-title" itemprop="headline"><?php bloginfo( 'name' ); ?></h1>
            <?php else: ?>
                <h2 class="site-title" itemprop="headline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
            <?php endif; ?>
                <h2 class="site-description" itemprop="description"><?php bloginfo( 'description' ); ?></h2>
            </div>
            <aside class="header-widget-area">
            <!-- header widget area -->
            </aside>
        </div>
    </header>
    <div class="site-inner">
