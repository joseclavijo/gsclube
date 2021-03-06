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
 * The template for displaying BBPress pages
 */

$context = Timber::get_context();

$context[ 'posts' ] = Timber::query_post();
$context[ 'content' ] = TimberHelper::ob_function( 'the_content' );

Timber::render( 'bbpress.html.twig', $context );
