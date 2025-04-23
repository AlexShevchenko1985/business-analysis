<?php
/**
 * Template name: Terms
 */
get_header();
?>
<div class="breadcrumbs">
	<div class="container-lg">
		<div class="breadcrumbs-holder">
            <a href="<?php echo home_url('/') ?>"><?php echo __('Home', 'node'); ?></a>
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
            <span><?php echo get_the_title(); ?></span>
		</div>
	</div>
</div>

<?php if(have_posts()): ?>
    <?php while ( have_posts() ) :
    the_post(); ?>
<div class="terms-layout">
    <div class="container-lg">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>
    <?php endwhile;?>
<?php endif; ?>

<?php
get_footer();
