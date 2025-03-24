<?php
use App\Helpers\Helper;

$title = !empty($title) ? $title : '';
$subtitle = !empty($subtitle) ? $subtitle : '';
$projects = !empty($projects) ? $projects : [];
$background = !empty($background)? $background: '';
?>
<section class="business-cases" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="heading">
            <?php if (!empty($title)): ?>
                <div class="sup-title"><?php echo $title; ?></div>
            <?php endif; ?>
            <?php if (!empty($subtitle)): ?>
                <h2><?php echo $subtitle; ?></h2>
            <?php endif; ?>
        </div>

        <?php if (!empty($projects)): ?>
            <div class="business-cases-slider">
                <div class="swiper js-business-cases-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($projects as $project):
                            if(empty($project->ID)){
                                continue;
                            }
                            $project_name = get_field('project_name', $project->ID);
                            $link = get_field('link', $project->ID);
                            $link_title = get_field('link_title', $project->ID);
                            $industry_location = get_field('industry_location', $project->ID);
                            $image = get_field('image', $project->ID);
                            ?>
                            <div class="swiper-slide">
                                <div class="slide-holder">
                                    <div class="title">
                                        <?php if (!empty($link)): ?>
                                             <a href="<?php echo $link; ?>" target="_blank">
                                        <?php endif; ?>
                                            <?php echo $project->post_title; ?>
                                         <?php if (!empty($link)): ?>
                                             </a>
                                         <?php endif; ?>
                                    </div>
                                    <div class="description-holder">

                                        <?php if (!empty($project_name)): ?>
                                            <div class="project-name">
                                                <span><?php echo __('Project name', SSW_TD); ?></span>
                                                <p><?php echo $project_name; ?> (<a href="<?php echo $link; ?>" target="_blank"><?php echo $link_title; ?></a>)</p>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($industry_location)): ?>
                                            <div class="location">
                                                <span><?php echo __('Industry & Location', SSW_TD); ?></span>
                                                <p><?php echo $industry_location; ?></p>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                    <?php if (!empty($image)): ?>
                                        <div class="image-block">
                                            <?php echo wp_get_attachment_image($image, 'hd-size'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($link)): ?>
                                        <div class="btn-holder">
                                            <a href="<?php echo $link; ?>" target="_blank" class="arrow-btn"><?php echo __('View Details', SSW_TD); ?> <img
                                                    src="/wp-content/themes/business-analysis/src/images/arrow-r.svg"
                                                    alt="Arrow"></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


    </div>
</section>
