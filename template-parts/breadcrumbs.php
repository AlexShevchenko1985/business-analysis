
<div class="breadcrumbs">
    <div class="container-lg">
        <div class="breadcrumbs-holder">
            <a href="<?php echo home_url('/')?>"><?php echo __('Home', 'node'); ?></a>
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
            <?php if (is_singular('case-study')): ?>
                <a href="<?php echo get_post_type_archive_link('case-study'); ?>"><?php echo __('Case Studies', 'node'); ?></a>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
            <?php else: ?>
                <a href="<?php echo get_post_type_archive_link('post'); ?>"><?php echo __('Blog', 'node'); ?></a>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
            <?php endif; ?>
            <span><?php echo get_the_title(); ?></span>
        </div>
    </div>
</div>