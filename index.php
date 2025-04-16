<?php
/**
 * The main template file
 */
use App\Helpers\Helper;
get_header();
?>
<?php if (have_posts()): ?>
    <div class="breadcrumbs">
        <div class="container-lg">
            <div class="breadcrumbs-holder">
                <a href="<?php echo home_url('/'); ?>"><?php echo __('Home', 'node'); ?></a>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
                <span><?php echo get_the_title(get_option('page_for_posts')); ?></span>
            </div>
        </div>
    </div>
    <div class="blog-page">
        <div class="container-lg">
            <h1><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
            <div class="blog-items-grid">

                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="item">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="image">
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
                            </div>
                            <div class="content">
                                <div class="text-holder">
                                    <div class="title"><?php echo get_the_title(); ?></div>
                                    <p><?php echo Helper::doExcerpt(get_the_content(), '414')?></p>
                                </div>
                                <div class="btn-holder">
                                    <a href="<?php echo get_permalink(); ?>" class="arrow-btn"><?php echo __('Read more', 'node'); ?> <img
                                                src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-r.svg"
                                                alt="Arrow"></a>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            </div>

            <?php Helper::getNavigation(); ?>

        </div>
    </div>
<?php endif; ?>
<?php
get_footer();
