<?php
get_header();
?>
<?php
$header_logo = get_field('option_header_logo', 'options');
?>
<section class="not-found">
    <div class="logo-holder">
        <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo get_bloginfo('name'); ?>" fetchpriority="high">
    </div>
    <div class="content-404-holder">
        <div class="numbers">404</div>
        <h2>
            <?php echo __("We couldn't find page you're looking for", 'ssw-wp-theme'); ?>
        </h2>
        <div class="btn-holder">
            <a class="main-btn" href="<?php echo home_url(); ?>" title="<?php echo __('404', 'ssw-wp-theme'); ?>"><?php echo __('Go home', 'ssw-wp-theme'); ?></a>
        </div>
    </div>
</section>

<?php
get_footer();
