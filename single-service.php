<?php
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
