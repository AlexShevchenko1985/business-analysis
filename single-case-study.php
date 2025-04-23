<?php
get_header();

/**
 * Breadcrumbs section
 */
get_template_part('template-parts/breadcrumbs');
?>

<?php if(have_posts()):
    $project_name = get_field('project_name');
    $industry_location = get_field('industry_location');
    $main_image = get_field('main_image');
    $delivered_value = get_field('delivered_value');
    ?>
    <?php while ( have_posts() ) :
    the_post(); ?>
<section class="single-case">
    <div class="container-lg">
        <div class="case-holder">
            <h1><?php echo get_the_title(); ?></h1>
            <div class="heading-block">
                <?php if (!empty($project_name)): ?>
                    <div class="name">
                        <span><?php echo __('Project name', 'node'); ?></span>
                        <p><?php echo $project_name; ?></p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($industry_location)): ?>
                    <div class="location">
                        <span><?php echo __('Industry & Location', 'node'); ?></span>
                        <p><?php echo $industry_location; ?></p>
                    </div>
                <?php endif; ?>

            </div>
            <?php if (!empty($main_image)): ?>
                <?php echo wp_get_attachment_image($main_image, 'hd-size'); ?>
            <?php endif; ?>
        </div>
        <div class="description-block">
            <div class="text-item">
                <div class="title"><?php echo __('Quick Description', 'node'); ?></div>
                <?php the_content(); ?>
            </div>
            <?php if (!empty($delivered_value)): ?>
                <div class="values-list">
                    <div class="title"><?php echo __('Delivered Value', 'node'); ?></div>
                    <ul>
                        <?php foreach ($delivered_value as $item): ?>
                            <?php if (!empty($item['value'])): ?>
                                <li><?php echo $item['value']; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endwhile;?>
<?php endif; ?>

<?php
get_footer();
