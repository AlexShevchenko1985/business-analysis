<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package main-theme
 */
use App\Helpers\FlexibleContentRenderer;

get_header();

/**
 * Hero section
 */
get_template_part('template-parts/hero');

/**
 * Content
 */
FlexibleContentRenderer::getInstance()->render(get_the_ID());
?>

<?php
/**
 * Form section
 */
get_template_part('template-parts/form');

get_footer();
