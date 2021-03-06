<?php
/**
 * @package   Gantry 5 Theme
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) or die;

/*
 * The template for displaying Author Archive pages
 */

global $wp_query;

$context = Timber::get_context();
$context[ 'posts' ] = Timber::get_posts();

if( isset( $authordata ) ) {
	$author = new TimberUser( $authordata->ID );
	$context[ 'author' ] = $author;
	$context[ 'title' ] = __( 'Author:', 'g5_hydrogen' ) . ' ' . $author->name();
}

Timber::render( [ 'author.html.twig', 'archive.html.twig', 'index.html.twig' ], $context );
