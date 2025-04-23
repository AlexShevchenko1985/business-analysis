<?php
/**
 * Template name: Case Studies Index
 */
get_header();
?>
    <div class="breadcrumbs">
        <div class="container-lg">
            <div class="breadcrumbs-holder">
                <a href="<?php echo home_url('/') ?>"><?php echo __('Home', 'node'); ?></a>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
                <span><?php echo __('Case Studies', 'node'); ?></span>
            </div>
        </div>
    </div>


    <section class="case-studies">
        <div class="container-lg">
            <div class="heading">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
            <?php
            $cases_study = new WP_Query(['post_type' => 'case-study', 'posts_per_page' => -1]);
            if ($cases_study->have_posts()): ?>
            <div class="cases-holder">
                <?php while ($cases_study->have_posts()) :
                    $cases_study->the_post();
                    $industry_location = get_field('industry_location');
                    $main_image = get_field('main_image');
                ?>
                    <div class="item">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php if (!empty($main_image)): ?>
                                <div class="image">
                                        <?php echo wp_get_attachment_image($main_image, 'medium_large'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($industry_location)): ?>
                                <div class="sub-title"><?php echo $industry_location; ?></div>
                            <?php endif; ?>
                            <div class="title"><?php echo get_the_title(); ?></div>
                            <div class="btn-holder">
                                <a href="<?php echo get_permalink(); ?>" class="arrow-btn">
                                    <?php echo __('View Details', 'node'); ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-r.svg"
                                            alt="Arrow">
                                </a>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </section>


<?php
get_footer();
