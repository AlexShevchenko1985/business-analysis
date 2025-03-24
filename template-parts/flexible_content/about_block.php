<?php
use App\Helpers\Helper;

$title      = !empty($title)? $title : '';
$text       = !empty($text)? $text : '';
$image      = !empty($image)? $image : '';
$background = !empty($background)? $background: '';
?>
<section class="two-columns-with-title" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <?php if (!empty($title)): ?>
            <div class="heading">
                <h2><?php echo $title; ?></h2>
            </div>
        <?php endif; ?>

        <div class="columns-holder">

            <?php if (!empty($image)): ?>
                <div class="image">
                    <?php echo wp_get_attachment_image($image, 'large'); ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($text)): ?>
                <div class="content">
                    <?php echo $text; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>