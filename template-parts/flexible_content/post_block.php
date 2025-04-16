<?php
use App\Helpers\Helper;

if(is_single()){
    $post_block = get_field('post_block');
    $background = !empty($post_block['background'])? $post_block['background'] : '';
    $title = !empty($post_block['title']) ? $post_block['title'] : '';
    $items = !empty($post_block['posts']) ? $post_block['posts'] : get_posts(['posts_per_page' => 3, 'orderby' => 'rand',]);
}else{
    $background = !empty($background)? $background: '';
    $title = !empty($title) ? $title : '';
    $items = !empty($posts) ? $posts : get_posts(['posts_per_page' => 3, 'orderby' => 'rand',]);
}
?>
<section class="cards" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <?php if (!empty($title)): ?>
            <div class="heading">
                <h2><?php echo $title; ?></h2>
            </div>
        <?php endif; ?>

        <?php if (!empty($items)): ?>
            <div class="cards-holder">
                <?php foreach ($items as $item): ?>
                    <div class="card">
                        <?php if (has_post_thumbnail($item->ID)): ?>
                            <div class="image">
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($item->ID), 'large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="content">
                            <div class="text-holder">
                                <div class="title"><?php echo $item->post_title; ?></div>
                                <?php if (!empty($item->post_excerpt)): ?>
                                    <p><?php echo $item->post_excerpt; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="btn-holder">
                                <a href="<?php echo get_permalink($item->ID); ?>"
                                   class="arrow-btn"><?php echo __('Read more', SSW_TD); ?> <img
                                            src="/wp-content/themes/business-analysis/src/images/arrow-r.svg"
                                            alt="Arrow"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
