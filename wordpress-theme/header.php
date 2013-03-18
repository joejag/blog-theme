<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/joe_head.jpg">

        <!-- Le styles -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <title><?php
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );

?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> onload="sh_highlightDocument();">

<div id="wrapper">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span11 offset1">
                  <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a>
                </div>
            </div>
        </div>

        <hr/>
